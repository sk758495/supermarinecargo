<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\QuotaRequest;
use Illuminate\Http\Request;

class VendorDashboardController extends Controller
{
    public function index()
    {
        return view('vendor.dashboard');
    }

    // recieve quote ke list ko vendor ki id thrue show karvana
    public function receive_quote()
    {
        // Get the logged-in vendor
        $vendor = auth()->guard('vendor')->user();
    
        // Fetch only the quotes related to this vendor
        $received_quote = QuotaRequest::where('vendor_id', $vendor->id)->latest()->get();
    
        return view('vendor.receive_quote', compact('received_quote'));
    }
    
    public function update_quote_status(Request $request, $id)
    {
        $quote = QuotaRequest::findOrFail($id);

        // Optional: Check if the logged-in vendor is allowed to update this quote
        if ($quote->vendor_id != auth()->guard('vendor')->id()) {
            abort(403);
        }

        $quote->status = $request->status;
        $quote->save();

        return redirect()->back()->with('success', 'Quote status updated successfully.');
    }

    // recieve quote ke data ko show karvana id thrue
    public function view_quote($id)
        {
            $view_quote = QuotaRequest::findOrFail($id); // Fetch specific record
            return view('vendor.view_quote', compact('view_quote'));
        }

        public function accepted_quote()
        {
            // Get the logged-in vendor
            $vendor = auth()->guard('vendor')->user();
        
            // Fetch only confirmed quotes related to this vendor
            $accepted_quote = QuotaRequest::where('vendor_id', $vendor->id)
                                          ->where('status', 'confirmed') // ✅ filter by status
                                          ->latest()
                                          ->get();
        
            return view('vendor.status.accepted_quote', compact('accepted_quote'));
        }

        public function cancelled_quote()
        {
            // Get the logged-in vendor
            $vendor = auth()->guard('vendor')->user();
        
            // Fetch only confirmed quotes related to this vendor
            $cancelled_quote = QuotaRequest::where('vendor_id', $vendor->id)
                                          ->where('status', 'cancelled') // ✅ filter by status
                                          ->latest()
                                          ->get();
        
            return view('vendor.status.cancelled_quote', compact('cancelled_quote'));
        }        

        public function pending_quote()
        {
            // Get the logged-in vendor
            $vendor = auth()->guard('vendor')->user();
        
            // Fetch only pending quotes
            $pending_quote = QuotaRequest::where('vendor_id', $vendor->id)
                                         ->where('status', 'pending')
                                         ->latest()
                                         ->get();
        
            return view('vendor.status.pending_quote', compact('pending_quote'));
        }
           

}
