<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function showOtpForm(Request $request) {
        return view('admin.auth.otp', ['email' => session('email')]);
    }

    public function notice()
    {
        return view('admin.auth.verify-notice');
    }

    public function verifyOtp(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);
    
        $admin = Admin::where('email', $request->email)->first();
    
        if ($admin && $admin->otp == $request->otp) {
            $admin->email_verified_at = now();
            $admin->otp = null;
            $admin->save();
    
            Auth::guard('admin')->login($admin);
    
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Boss.');
        }
    
        return back()->withErrors(['otp' => 'Invalid OTP']);
    }
    
}
