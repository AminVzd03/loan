<?php

use Illuminate\Support\Facades\Route;
use Modules\Demand\src\Http\Controllers\user\DemandController;
Route::prefix('v1demand')->group(function () {
    Route::controller(DemandController::class)->name('api.v1.demand')->group(function () {
     //   Route::get('/create-page', 'create')->name('create-page');
        Route::get('/show', 'show')->name('show')->middleware('auth');
    });

});
