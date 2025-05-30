<?php

use App\Http\Controllers\Admin\AdminAuthController;
use Illuminate\Support\Facades\Route;


Route::post('/login',[AdminAuthController::class,'login']);
Route::post('/change-password',[AdminAuthController::class,'changePassword'])->middleware('auth:sanctum');
Route::get('/logout',[AdminAuthController::class,'logout'])->middleware('auth:sanctum');
