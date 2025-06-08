<?php

use Illuminate\Support\Facades\Route;
use Modules\Demand\src\Http\Controllers\user\DemandController;
Route::prefix('api-v1-demand')->group(function () {
   Route::controller(DemandController::class)->group(function () {
       Route::get('/create', 'create')->name('create');
       Route::post('/show', 'show')->name('show');
   });

});
