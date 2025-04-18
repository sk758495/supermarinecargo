<?php

// routes/web.php

use App\Http\Controllers\User_UI\QuotaController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('quota_index', [QuotaController::class, 'quota_index'])->name('quota.dashboard');

    // Modify this route to accept vendor_id
    Route::get('view_form_msg/{vendor_id}', [QuotaController::class, 'view_form_msg'])->name('quota.quota-form-msg');

    Route::get('quota_form/{vendor_id}', [QuotaController::class, 'quota_form'])->name('quota.quota-form');

    Route::post('quota_form/{vendor_id}', [QuotaController::class, 'storeQuotaRequest'])->name('quota.store');

});
