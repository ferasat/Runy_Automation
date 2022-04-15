<?php

use Rqs\Controllers\CorrectionRequestController;
use Rqs\Controllers\PaymentRequestController;
use Illuminate\Support\Facades\Route;



///  -------------- For UserAdmin ----------------
Route::prefix('/dashboard/rqs')->group(function () {
    Route::get('/payments', [PaymentRequestController::class ,'index'])->name('payments.index');
    Route::get('/payments/new', [PaymentRequestController::class ,'create'])->name('payment.r.create');

    Route::get('/corrections', [CorrectionRequestController::class ,'index'])->name('corrections.index');
});
