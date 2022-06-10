<?php

use Dashboard\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class , 'index'])->name('home');
});
