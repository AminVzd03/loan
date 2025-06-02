<?php

use Illuminate\Support\Facades\Route;
Route::post('/test', function () {
    return view('User::userLayout');
});
