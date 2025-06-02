<?php

use Illuminate\Support\Facades\Route;
use Modules\Demand\src\Http\Controllers\user\DemandController;
Route::prefix('v1-demand')->group(function () {
   Route::controller(DemandController::class)->name('api.v1.demand')->group(function () {
       Route::get('/create', 'create')->name('create');
       Route::post('/show', 'show')->name('show');
   });

});
