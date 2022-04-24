<?php

use Rqs\Controllers\CorrectionRequestController;
use Rqs\Controllers\LeaveFormController;
use Rqs\Controllers\PaymentRequestController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard/rqs')->middleware('auth')->group(function () {
    Route::get('/payments', [PaymentRequestController::class ,'index'])->name('payments.index');
    Route::get('/payments/new', [PaymentRequestController::class ,'create'])->name('payment.r.create');

    Route::get('/corrections', [CorrectionRequestController::class ,'index'])->name('corrections.index');
    Route::get('/corrections/new', [CorrectionRequestController::class ,'create'])->name('correction.r.create');

    Route::get('/leave-forms/', [LeaveFormController::class ,'index'])->name('leave-forms.index');
    Route::get('/leave-forms/new', [LeaveFormController::class ,'create'])->name('leave-forms.create');

    Route::get('/overtime-forms/', [LeaveFormController::class ,'index'])->name('overtime-forms.index');
    Route::get('/overtime-forms/new', [LeaveFormController::class ,'create'])->name('overtime-forms.create');
});
