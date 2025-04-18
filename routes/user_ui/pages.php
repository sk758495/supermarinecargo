<?php

// routes/web.php

use App\Http\Controllers\User_UI\UserController;
use Illuminate\Support\Facades\Route;


    Route::get('tank_cleaning', [UserController::class, 'tank_cleaning'])->name('pages.tank_cleaning');
    Route::get('hold_cleaning', [UserController::class, 'process'])->name('pages.hold_cleaning');
    Route::get('underwater_hull', [UserController::class, 'underwater_hull'])->name('pages.underwater_hull');
    Route::get('contact_us', [UserController::class, 'contact_us'])->name('pages.contact_us');
