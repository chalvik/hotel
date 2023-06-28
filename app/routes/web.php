<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use  App\Http\Controllers\Admin\HotelController;
use  App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PageTemplateController;
use App\Http\Controllers\Admin\PageBlockTemplateController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// Auth::routes();
Route::prefix('admin')->group(function () {
    Route::resource('hotels', HotelController::class);
    Route::resource('cities', CityController::class);
    Route::resource('page-templates', PageBlockTemplateController::class);
    Route::resource('page-block-templates', PageTemplateController::class);

});
