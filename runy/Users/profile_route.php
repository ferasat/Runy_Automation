<?php
use Illuminate\Support\Facades\Route;
use Users\Controllers\UserController;


///  -------------- For UserAdmin ----------------
Route::prefix('/dashboard/user')->group(function () {
    Route::get('/index', [UserController::class ,'indexUsers'])->name('users.index');
    Route::get('/new', [UserController::class ,'newUser'])->name('user.new');
    Route::get('/edit', [UserController::class ,'editUser'])->name('user.edit');
});
