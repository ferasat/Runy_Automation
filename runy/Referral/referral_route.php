<?php

use Referral\Controllers\ReferralController;
use Illuminate\Support\Facades\Route;



///  -------------- For UserAdmin ----------------
Route::prefix('/dashboard/referral')->middleware('auth')->group(function () {
    Route::get('/index', [ReferralController::class ,'index'])->name('referral.index');


});
