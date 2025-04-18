<?php

namespace App\Http\Controllers\Vendor\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VendorOtpVerificationMail;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class VendorAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('vendor.auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        if (Auth::guard('vendor')->attempt($credentials)) {
            $vendor = Auth::guard('vendor')->user();
    
            if (is_null($vendor->email_verified_at)) {
                // Generate a new OTP and token
                $otp = rand(1000, 9999);
                $vendor->otp = $otp;
                $vendor->otp_expires_at = now()->addMinutes(10);
                $vendor->verification_token = Str::random(60); // regenerate token
                $vendor->save();
    
                Auth::guard('vendor')->logout(); // logout since not verified
    
                // Resend the OTP
                Mail::to($vendor->email)->send(new VendorOtpVerificationMail($otp));
    
                // Redirect to OTP verification route
                return redirect()->route('vendor.send-otp.verify', [
                    'id' => $vendor->id,
                    'token' => $vendor->verification_token,
                ])->with('status', 'Please verify your email to continue.');
            }
    
            $request->session()->regenerate();
            return redirect()->intended(route('vendor.dashboard'))->with('success', 'Welcome Back Sir.');
        }
    
        throw ValidationException::withMessages([
            'email' => __('Invalid credentials'),
        ]);
    }
    
    public function showRegisterForm()
    {
        return view('vendor.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:vendors',
            'password' => 'required|string|min:8|confirmed',
            'country' => 'required|string',
            'port' => 'required|string',
            'services' => 'required|string',
        ]);
    
        // Create the vendor
        $vendor = Vendor::create([
            'name' => $request->name,
            'email' => $request->email,
            'country' => $request->country,
            'port' => $request->port,
            'services' => $request->services,
            'password' => Hash::make($request->password),
        ]);
    
        // Generate OTP and save it
        $otp = rand(1000, 9999);
        $vendor->otp = $otp;
        $vendor->otp_expires_at = now()->addMinutes(10);
        $vendor->verification_token = Str::random(60);
        $vendor->save();
    
        // Send OTP to the vendor's email
        Mail::to($vendor->email)->send(new VendorOtpVerificationMail($otp));
    
        // Redirect the vendor to the OTP verification page with both id and token
        return redirect()->route('vendor.send-otp.verify', [
            'id' => $vendor->id, 
            'token' => $vendor->verification_token
        ]);
    }
    

    public function showOtpVerificationForm($id, $token)
    {
        // Find vendor by ID
        $vendor = Vendor::findOrFail($id);
    
        // Ensure the token matches
        if ($vendor->verification_token !== $token) {
            abort(404, 'Invalid token');
        }
    
        // Generate a new OTP (optional, if you're regenerating it)
        $otp = rand(1000, 9999);  // Generate a 4-digit OTP
        $vendor->otp = $otp;
        $vendor->otp_expires_at = now()->addMinutes(10);  // Set expiry to 10 minutes
        $vendor->save();
    
        // Send OTP via email again (optional)
        Mail::to($vendor->email)->send(new VendorOtpVerificationMail($otp));
    
        // Return the OTP verification view
        return view('vendor.auth.otp-verification', compact('vendor', 'otp'));
    }
    
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric|digits:4',
        ]);

        $vendor = Vendor::findOrFail($request->vendor_id);

        if ($vendor->otp == $request->otp && $vendor->otp_expires_at > now()) {
            $vendor->email_verified_at = now();
            $vendor->otp = null;
            $vendor->otp_expires_at = null;
            $vendor->save();

            Auth::guard('vendor')->login($vendor);

            return redirect()->route('vendor.dashboard')->with('status', 'Email successfully verified!');
        }

        return back()->withErrors(['otp' => 'Invalid or expired OTP.']);
    }

    public function resendOtp(Request $request)
    {
        $vendor = Vendor::findOrFail($request->vendor_id);

        $otp = rand(1000, 9999);
        $vendor->otp = $otp;
        $vendor->otp_expires_at = now()->addMinutes(10);
        $vendor->save();

        Mail::to($vendor->email)->send(new VendorOtpVerificationMail($otp));

        return back()->with('status', 'OTP has been resent to your email!');
    }

    public function vendor_logout(Request $request)
    {
        Auth::guard('vendor')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('vendor.login')->with('success', 'See you soon Boss.');
    }
}
