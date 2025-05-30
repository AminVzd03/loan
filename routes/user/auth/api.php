<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\User\UserAuthController;

Route::prefix('user')->group(function () {
    Route::controller(UserAuthController::class)->group(function () {
        Route::get('/login',action:'login')->name('login');
        Route::post('/register',action:'register')->name('register');
        Route::post('/change-password',action:'changePassword')->name('changePassword');
        Route::get('/logout',action:'logout')->name('logout');
    });
});

