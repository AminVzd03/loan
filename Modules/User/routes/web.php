<?php

use Illuminate\Support\Facades\Route;
use Modules\User\src\Http\Controllers\UserAuthController;

Route::prefix('user')->group(function () {
    Route::controller(UserAuthController::class)->group(function () {
        Route::get('/login', action: 'loginPage')->name('login-page')->middleware('guest');
        Route::post('/login-submit', action: 'login')->name('login')->middleware('guest');

        Route::get('/register', action: 'registerPage')->name('register-page')->middleware('guest');
        Route::post('/register-submit', action: 'register')->name('register-submit')->middleware('guest');
        Route::get('/dashboard', action: 'dashboard')->name('dashboard')->middleware('auth');
        Route::post('/change-password', action: 'changePassword')->name('changePassword')
            ->middleware('auth');
        Route::get('/logout', action: 'logout')->name('logout')->middleware('auth');
    });
});


