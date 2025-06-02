<?php

use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserAuthController;

Route::prefix('user')->group(function () {
    Route::controller(UserAuthController::class)->group(function () {
        Route::post('/login', action: 'login')->name('user-login')->middleware('guest');
        Route::post('/register', action: 'register')->name('register')->middleware('auth');
        Route::post('/change-password', action: 'changePassword')->name('changePassword')
            ->middleware('auth');
        Route::get('/logout', action: 'logout')->name('logout')->middleware('auth');
    });
});


