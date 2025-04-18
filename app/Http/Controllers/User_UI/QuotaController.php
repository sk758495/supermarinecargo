<?php

namespace App\Http\Controllers\User_UI;

use App\Http\Controllers\Controller;
use App\Models\QuotaRequest;
use Illuminate\Http\Request;
use App\Models\Vendor; // Import the Vendor model
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class QuotaController extends Controller
{
    public function quota_index(Request $request)
    {
        $query = Vendor::query();

        // Search Filter
        if ($request->has('search') && !empty($request->search)) {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('port', 'like', '%' . $request->search . '%')
                  ->orWhere('services', 'like', '%' . $request->search . '%');
        }

        // Service Type Filter
        if ($request->has('service_type') && !empty($request->service_type)) {
            $query->where('services', 'like', '%' . $request->service_type . '%');
        }

        // Port Location Filter
        if ($request->has('port_location') && !empty($request->port_location)) {
            $query->where('port', $request->port_location);
        }

        // Sorting
        if ($request->has('sort_by') && !empty($request->sort_by)) {
            if ($request->sort_by == 'name_asc') {
                $query->orderBy('name', 'asc');
            } elseif ($request->sort_by == 'name_desc') {
                $query->orderBy('name', 'desc');
            } else {
                $query->latest(); // Default: Most Recent
            }
        } else {
            $query->latest(); // Default: Most Recent
        }

        // Now paginate after all filters are applied
     $vendors = $query->paginate(10); // Get the filtered and sorted vendors

        return view('user-ui.quota_list', compact('vendors'));
    }

    public function view_form_msg($vendor_id)
    {
        $vendor = Vendor::find($vendor_id);

        if (!$vendor) {
            return redirect()->route('quota.dashboard')->with('error', 'Vendor not found.');
        }

        $userId = Auth::id();

        // Get all quota requests submitted by this user to this vendor
        $requests = QuotaRequest::where('vendor_id', $vendor_id)
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user-ui.quota-form_msg', compact('vendor', 'requests'));
    }
 
    public function quota_form($vendor_id)
    {
        // Find the vendor by id or handle the case if not found
        $vendor = Vendor::find($vendor_id);
        
        if (!$vendor) {
            // If vendor not found, you can handle the error or redirect as needed
            return redirect()->route('quota.dashboard')->with('error', 'Vendor not found.');
        }
    
        return view('user-ui.quota-form', compact('vendor'));
    }
 
    public function storeQuotaRequest(Request $request, $vendor_id)
{
    // Validate the form input
    $validatedData = $request->validate([
        'vessel_name' => 'required|string|max:255',
        'voyage_number' => 'required|string|max:255',
        'imo_number' => 'required|string|max:255',
        'eta' => 'required|date',
        'agents' => 'required|string|max:255',
        'request_type' => 'required|string|max:255',
        'service_description' => 'required|string',
        'tob_cleaning' => 'required|string',
        'equipment_description' => 'required|string',
        'last_5_cargo' => 'required|string',
        'hold_images' => 'array', // Expecting an array of images
        'iframe_code' => 'nullable|string',
        'company_name' => 'required|string|max:255',
        'company_logo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:10240', // Max 10MB for company logo
        'company_address' => 'required|string|max:255',
        'form_filler_name' => 'required|string|max:255',
        'email' => 'required|string|max:20',
        'mobile' => 'required|string|max:20',
    ]);

    // Store the images and handle the uploads
    $holdImages = [];
    if ($request->has('hold_images')) {
        foreach ($request->file('hold_images') as $key => $files) {
            foreach ($files as $file) {
                // Validate file size (Max 10MB)
                $this->validateFileSize($file);
                
                // Store the file and get the path
                $path = $file->store("hold_images/{$key}", 'public');
                $holdImages[$key][] = $path;
            }
        }
    }
    
    // Store the company logo if uploaded
    $companyLogoPath = null;
    if ($request->hasFile('company_logo')) {
        $companyLogo = $request->file('company_logo');
        
        // Validate company logo size (Max 10MB)
        $this->validateFileSize($companyLogo);

        // Store the company logo and get the path
        $companyLogoPath = $companyLogo->store('company_logos', 'public'); // 🔥 Store in public disk
    }

    // Save the form data into the database
    $quotaRequest = QuotaRequest::create([
        'vendor_id' => $vendor_id, // Attach the vendor_id
        'user_id' => Auth::id(),
        'vessel_name' => $validatedData['vessel_name'],
        'voyage_number' => $validatedData['voyage_number'],
        'imo_number' => $validatedData['imo_number'],
        'eta' => $validatedData['eta'],
        'agents' => $validatedData['agents'],
        'request_type' => $validatedData['request_type'],
        'service_description' => $validatedData['service_description'],
        'tob_cleaning' => $validatedData['tob_cleaning'],
        'equipment_description' => $validatedData['equipment_description'],
        'last_5_cargo' => $validatedData['last_5_cargo'],
        'hold_images' => json_encode($holdImages), // Store images as JSON
        'iframe_code' => $validatedData['iframe_code'],
        'company_name' => $validatedData['company_name'],
        'company_logo' => $companyLogoPath,
        'company_address' => $validatedData['company_address'],
        'form_filler_name' => $validatedData['form_filler_name'],
        'email' => $validatedData['email'],
        'mobile' => $validatedData['mobile'],
    ]);

    // Redirect or return a response (e.g., to a thank you page)
    return redirect()->route('quota.dashboard')->with('success', 'Quote request submitted successfully!');
}

/**
 * Helper method to validate file size.
 *
 * @param \Illuminate\Http\UploadedFile $file
 * @throws \Illuminate\Validation\ValidationException
 */
protected function validateFileSize($file)
{
    // Max file size 10MB (10 * 1024 * 1024 bytes)
    $maxSize = 10 * 1024 * 1024;
    
    if ($file->getSize() > $maxSize) {
        throw ValidationException::withMessages([
            'file' => 'The file size exceeds the maximum allowed size of 10MB.'
        ]);
    }
}



}
