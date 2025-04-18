<?php

// routes/web.php

use App\Http\Controllers\Admin\Auth\AdminController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\VerificationController;
use Illuminate\Support\Facades\Route;



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login']);

    
    Route::get('otp-verify', [VerificationController::class, 'showOtpForm'])->name('otp.form');
    Route::post('otp-verify', [VerificationController::class, 'verifyOtp'])->name('otp.verify');

    // Email Verification Routes
    Route::get('email/verify', [VerificationController::class, 'notice'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [VerificationController::class, 'resend'])->name('verification.resend');

    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

});


Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/admin/dashboard',  [AdminController::class, 'admin_dashboard'])->name('admin.dashboard');
});
