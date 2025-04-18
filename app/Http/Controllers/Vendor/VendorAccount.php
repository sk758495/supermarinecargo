<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\VendorProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class VendorAccount extends Controller
{
    public function account_page()
    {
        $vendor = auth()->guard('vendor')->user();
        $profile = $vendor->profile ?? new VendorProfile();

        return view('vendor.vendor_account_details', compact('vendor', 'profile'));
    }

    public function update_account(Request $request)
    {
        $vendor = auth()->guard('vendor')->user();
    
        if ($request->form_type === 'currency') {
            $request->validate([
                'currency' => 'nullable|string|max:10',
            ]);
    
            VendorProfile::updateOrCreate(
                ['vendor_id' => $vendor->id],
                ['currency' => $request->currency]
            );
    
            return back()->with('success', 'Currency updated successfully.');
        }
    
        if ($request->form_type === 'ports') {
            // Validate ports (optional)
            $request->validate([
                'ports' => 'nullable|array',
            ]);
    
            VendorProfile::updateOrCreate(
                ['vendor_id' => $vendor->id],
                ['ports' => json_encode($request->ports ?? [])]
            );
    
            return back()->with('success', 'Ports updated successfully.');
        }
    
        // Default profile update
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'profile_image' => 'nullable|image|max:2048',
        ]);
    
        $vendor->update([
            'name' => $request->name,
        ]);
    
        $profile = VendorProfile::updateOrCreate(
            ['vendor_id' => $vendor->id],
            [
                'title' => $request->title,
                'phone' => $request->phone,
                'ports' => json_encode($request->ports ?? []),
            ]
        );
    
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('vendor_images', 'public');
            $profile->profile_image = 'storage/' . $imagePath;
            $profile->save();
        }
    
        return back()->with('success', 'Profile updated successfully.');
    }
    

    public function update_password(Request $request)
    {
        $vendor = auth()->guard('vendor')->user();

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
        ]);

        if (!Hash::check($request->old_password, $vendor->password)) {
            return back()->withErrors(['old_password' => 'Old password is incorrect']);
        }

        $vendor->update([
            'password' => Hash::make($request->new_password),
        ]);

        return back()->with('success', 'Password updated successfully.');
    }
}
