<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\VendorAccount;

Route::prefix('vendor')->name('vendor.')->group(function () {


    // Authenticated vendor routes
    Route::middleware('auth:vendor')->group(function () {

        Route::get('account_page', [VendorAccount::class, 'account_page'])->name('account_page');
        
        Route::post('account_page', [VendorAccount::class, 'update_account'])->name('account.update');

        Route::post('account/password', [VendorAccount::class, 'update_password'])->name('account.update_password');

        Route::post('account/currency', [VendorAccount::class, 'update_account'])->name('account.update_currency');

        Route::post('account/port', [VendorAccount::class, 'update_account'])->name('port.update');

    });

    

});
