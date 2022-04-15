<?php
use Illuminate\Support\Facades\Route;
use Rp\Controllers\UserRolePermissionController;
use Rp\Controllers\RpPartController ;
use Rp\Controllers\UserRoleController ;

///  -------------- For UserAdmin ----------------
Route::prefix('dashboard/rp')->middleware('auth')->group(function () {
    Route::get('/index', [UserRolePermissionController::class , 'index'])->name('rp.index');
    Route::get('/role', [UserRoleController::class , 'index' ])->name('user_role.index');
    Route::get('/part', [RpPartController::class , 'index'])->name('user_permission.index');
});

///  -------------- For Customer ----------------
