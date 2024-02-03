<?php

use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::middleware('guest:web_admin')->group(function () {
        Route::get('login', [AuthenticatedSessionController::class, 'create'])
            ->name('admin.login');

        Route::post('login', [AuthenticatedSessionController::class, 'store']);
    });

    Route::middleware('auth:web_admin')->group(function () {
        Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
            ->name('admin.logout');
    });
});
