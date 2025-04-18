<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\Auth\VendorAuthController;
use App\Http\Controllers\Vendor\VendorDashboardController;

Route::prefix('vendor')->name('vendor.')->group(function () {

    // Unauthenticated vendor routes
    Route::middleware('guest:vendor')->group(function () {
        Route::get('login', [VendorAuthController::class, 'showLoginForm'])->name('login');
        Route::post('login', [VendorAuthController::class, 'login']);

        Route::get('register', [VendorAuthController::class, 'showRegisterForm'])->name('register');
        Route::post('register', [VendorAuthController::class, 'register']);

        Route::get('otp/verify/{id}/{token}', [VendorAuthController::class, 'showOtpVerificationForm'])->name('send-otp.verify');
        Route::post('otp/verify/{id}/{token}', [VendorAuthController::class, 'verifyOtp']);
        
        Route::post('otp/resend', [VendorAuthController::class, 'resendOtp'])->name('otp.resend');
    });

    // Authenticated vendor routes
    Route::middleware('auth:vendor')->group(function () {
        Route::get('dashboard', [VendorDashboardController::class, 'index'])->name('dashboard');

        Route::get('receive_quote', [VendorDashboardController::class, 'receive_quote'])->name('vendor.receive_quote');
        
        Route::put('/quote/status/{id}', [VendorDashboardController::class, 'update_quote_status'])->name('update.quote.status');
        
        Route::get('accepted_quote', [VendorDashboardController::class, 'accepted_quote'])->name('vendor.accepted_quote');
        
        Route::get('cancelled_quote', [VendorDashboardController::class, 'cancelled_quote'])->name('vendor.cancelled_quote');

        Route::get('pending_quote', [VendorDashboardController::class, 'pending_quote'])->name('vendor.pending_quote');
        
        Route::get('view-quote/{id}', [VendorDashboardController::class, 'view_quote'])->name('view.quote');

        Route::post('logout', [VendorAuthController::class, 'vendor_logout'])->name('logout');
    });
});
