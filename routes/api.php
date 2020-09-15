<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\promositionController;
use App\Http\Controllers\Api\favoriteController;
use App\Http\Controllers\Api\breakfastController;
use App\Http\Controllers\Api\cartController;

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


Route::get('/getPromosition', [promositionController::class, 'index']);
Route::get('/getFavorite', [favoriteController::class, 'index']);
Route::get('/getBreakfast', [breakfastController::class, 'index']);
Route::get('/getCart', [cartController::class, 'index']);


