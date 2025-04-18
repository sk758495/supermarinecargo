<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Mail;


class RegisterController extends Controller
{
    public function showRegisterForm() {
        return view('admin.auth.register');
    }
    
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();
    
        $admin = $this->create($request->all());
    
        // ✅ Generate OTP
        $otp = rand(100000, 999999);
        $admin->otp = $otp;
        $admin->save();
    
        // ✅ Send OTP via email
        Mail::to($admin->email)->send(new \App\Mail\AdminOtpVerification($admin));
    
        // ✅ Store email in session (for OTP form)
        session(['email' => $admin->email]);
    
        // ❌ Don't login yet — login only after OTP verify
        // auth('admin')->login($admin);
    
        return redirect()->route('admin.otp.form')->with('success', 'Check you mail box for otp.');
    }
    
    
    protected function validator(array $data) {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:admins'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    
    protected function create(array $data) {
        return Admin::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
