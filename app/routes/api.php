<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HotelsApiController;
use App\Http\Controllers\Api\CityApiController;
use App\Http\Controllers\Api\HotelSliderApiController;
use App\Http\Controllers\Api\HotelRoomApiController;
use App\Http\Controllers\Api\HotelBuildingApiController;
use App\Http\Controllers\Api\HotelSpecialOffersApiController;
use App\Http\Controllers\Api\HotelPageApiController;
use App\Http\Controllers\Api\NavigateApiController;
use App\Http\Controllers\Api\HotelInfrastructureApiController;
use App\Http\Controllers\Api\HotelInfrastructureCategoryApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function() {

    Route::resource('hotels', HotelsApiController::class)->only('index', 'show');
    Route::resource('pages', HotelPageApiController::class)->only('index', 'show');
    Route::resource('sliders', HotelSliderApiController::class)->only('show');
    Route::resource('rooms', HotelRoomApiController::class)->only('index', 'show');
    Route::resource('buildings', HotelBuildingApiController::class)->only('show', 'index');
    Route::resource('special-offers', HotelSpecialOffersApiController::class)->only('show', 'index');
    Route::resource('cities', CityApiController::class)->only('show', 'index');
    Route::resource('navigation', NavigateApiController::class)->only('show', 'index');
    Route::resource('infrastructures', HotelInfrastructureApiController::class)->only('show', 'index');
    Route::resource('infrastructure-categories', HotelInfrastructureCategoryApiController::class)->only('show', 'index');

});
