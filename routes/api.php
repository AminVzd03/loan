<?php
//require 'user/auth/api.php';
require base_path('Modules/Installment/routes/api.php');
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

