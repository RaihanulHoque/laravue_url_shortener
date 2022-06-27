<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UrlShorterController;

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
Route::get('/surl/{hash}', [UrlShorterController::class, 'getDestinationUrl']);
Route::post('/add-url', [UrlShorterController::class, 'addUrl']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

