<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class LoginController extends Controller
{
    public function showLoginForm()
        {
            return view('admin.auth.login');
        }


    public function login(Request $request) {
        $credentials = $request->only('email', 'password');
    
        if (Auth::guard('admin')->attempt($credentials)) {
            $admin = Auth::guard('admin')->user();
    
            if ($admin->email_verified_at === null) {
                Auth::guard('admin')->logout();
    
                $otp = rand(100000, 999999);
                $admin->otp = $otp;
                $admin->save();
    
                // Email OTP (use notification/mailable)
                Mail::to($admin->email)->send(new \App\Mail\AdminOtpVerification($admin));
    
                return redirect()->route('admin.otp.form')->with('email', $admin->email);
            }
    
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Boss.');
        }
    
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')->with('success', 'Log Out Succesfully.');
    }

    
}
