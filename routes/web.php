<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListController;


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


Route::controller(ListController::class)->group(function(){

    Route::get('/', 'index')->name('index');

    Route::post('api/fetch-cities', 'fetchCity')->name('fetchCity');

    Route::post('api/fetch-areas', 'fetchArea')->name('fetchArea');    
});

