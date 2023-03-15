<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CountryAPIController;
use App\Http\Controllers\CityAPIController;
use App\Http\Controllers\AreaAPIController;


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

Route::get('showCountry',[CountryAPIController::class,'showCountryData']);
Route::post('addCountry',[CountryAPIController::class,'addCountryData']);
Route::delete('deleteCountry/{id}',[CountryAPIController::class,'deleteCountryData']);
Route::put('editCountry/{id}',[CountryAPIController::class,'editCountryData']);


Route::get('showCity',[CityAPIController::class,'showCityData']);
Route::post('addCity',[CityAPIController::class,'addCityData']);
Route::delete('deleteCity/{id}',[CityAPIController::class,'deleteCityData']);
Route::put('editCity/{id}',[CityAPIController::class,'editCityData']);


Route::get('showArea',[AreaAPIController::class,'showAreaData']);
Route::post('addArea',[AreaAPIController::class,'addAreaData']);
Route::delete('deleteArea/{id}',[AreaAPIController::class,'deleteAreaData']);
Route::put('editArea',[AreaAPIController::class,'editAreaData']);
