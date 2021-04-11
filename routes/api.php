<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//Route::middleware('auth:api')->namespace('App\Http\Controllers\Api')->group(function () {
//    Route::resource('/bus-booking', 'BookingController');
//});

Route::resource('/bus-booking', 'App\Http\Controllers\Api\BookingController');
Route::Post('/bus-booking/available-seats/','App\Http\Controllers\Api\LinesController@show');
