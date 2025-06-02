<?php
use \Illuminate\Support\Facades\Route;
use Modules\Installment\src\Http\Controllers\InstallmentController;

Route::prefix('installment')->group(function () {
   Route::controller(InstallmentController::class)->group(function () {
       Route::get('/installments', 'index');
   });
});

