<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\IndexController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/dich-vu/{service_group}.html', [IndexController::class, 'service_groups'])->name('service_groups');


Route::post('uploadImage', [ImageController::class, 'upload'])->name('upload.image');

Route::group(['namespace' => 'ManageSystem', 'prefix' => '/ManageSystem', 'name' => 'manage_system.'], function() {
    Route::get('get_provinces', [AddressController::class, 'provinces'])->name('provinces');
    Route::get('get_districts', [AddressController::class, 'getDistricts'])->name('districts');
    Route::get('get_wards', [AddressController::class, 'getWards'])->name('wards');
});

require __DIR__ . '/admin.php';

require __DIR__ . '/admin_auth.php';
