<?php

use App\Http\Controllers\Admin\Categories\ServiceController;
use App\Http\Controllers\Admin\Categories\ServiceGroupController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Home\BannerController;
use App\Http\Controllers\Admin\Home\FeedbackController;
use App\Http\Controllers\Admin\ManageSystem\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('admin')->as('admin.')->middleware(['auth:web_admin'])->group(function () {

    Route::get('Dashboard', [DashboardController::class, '__invoke'])->name('dashboard');


    Route::prefix('Home')->as('home.')->group(function() {
        Route::resource('banners', BannerController::class)->except(['show']);
        Route::resource('feedbacks', FeedbackController::class)->except(['show']);
    });

    Route::prefix('Categories')->as('categories.')->group(function() {
        Route::resource('service_groups', ServiceGroupController::class)->except(['show']);
        Route::resource('services', ServiceController::class)->except(['show']);
    });

    Route::prefix('ManageSystem')->as('manage_system.')->group(function() {
        Route::get('company_info', [CompanyController::class, 'index'])->name('company_info');
        Route::post('company_info', [CompanyController::class, 'update']);
    });

});
