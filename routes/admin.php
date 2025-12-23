<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'middleware' => 'auth:admin'], function () {
    Route::get('login', [LoginController::class, 'show_login_view'])->name('showlogin');
    Route::post('login', [LoginController::class, 'login'])->name('login');
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
});
