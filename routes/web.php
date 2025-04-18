<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/user_ui/quota.php';

require __DIR__.'/user_ui/pages.php';


use App\Http\Controllers\Auth\OtpVerificationController;


Route::get('auth/otp/verify', [OtpVerificationController::class, 'show'])->name('auth.otp.verify');
Route::post('auth/otp/verify', [OtpVerificationController::class, 'verify']);
Route::post('auth/otp/resend', [OtpVerificationController::class, 'resend'])->name('auth.otp.resend');

// google direct
use App\Http\Controllers\Auth\SocialAuthController;

Route::get('/auth/google', [SocialAuthController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/auth/google/callback', [SocialAuthController::class, 'handleGoogleCallback']);



// require __DIR__.'/vendor/vendor.php';
// In routes/web.php or routes/vendor.php (depending on your setup)
require __DIR__.'/vendor/vendor.php';

require __DIR__.'/vendor/vendor_account.php';


Route::prefix('vendor')
    ->name('vendor.')
    ->group(base_path('routes/vendor/vendor.php'));

// chatboat
    use App\Http\Controllers\ChatController;

// For User
// Shared for both user and vendor
Route::post('/chat/send', [ChatController::class, 'sendMessage'])->name('chat.send');
Route::post('/chat/fetch', [ChatController::class, 'fetchMessages'])->name('chat.fetch');

// For User
Route::middleware('auth')->group(function () {
    Route::get('/chat/{vendor_id}', [ChatController::class, 'showChat'])->name('chat.user');
});

// For Vendor
Route::prefix('vendor')->middleware('auth:vendor')->group(function () {
    Route::get('/chat/{user_id}', [ChatController::class, 'vendorChat'])->name('chat.vendor');
});


