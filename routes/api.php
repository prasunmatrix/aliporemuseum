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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

use App\Http\Controllers\api\AudioController;

Route::middleware('api')
    ->namespace('api')
    /*->prefix("v1")*/
->group(function () {
    Route::get('/locationFetch', "AudioController@locationFetch");
});

Route::post('/favouriteLocationList', [App\Http\Controllers\api\AudioController::class, 'favouriteLocationList'])->name('favouriteLocationList');
Route::post('/locationFetch', [App\Http\Controllers\api\AudioController::class, 'locationFetch'])->name('locationFetch');
Route::post('/audioFetch', [App\Http\Controllers\api\AudioController::class, 'audioFetch'])->name('audioFetch');
Route::post('/typeList', [App\Http\Controllers\api\AudioController::class, 'typeList'])->name('typeList');
