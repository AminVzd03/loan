<?php
// change
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\User\UserAuthController;

Route::prefix('user')->group(function () {
    Route::prefix('auth')->group(function () {
        Route::controller(UserAuthController::class)->group(function () {
            Route::post('/login',action:'login')->name('login') ;
            Route::post('/register',action:'register')->name('register');
            Route::post('/change-password',action:'changePassword')->name('changePassword')
                ->middleware('auth:sanctum');
            Route::get('/logout',action:'logout')->name('logout')->middleware('auth:sanctum');
        });
    });
});

