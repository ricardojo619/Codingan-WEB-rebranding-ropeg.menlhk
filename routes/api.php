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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// API
//posts
Route::get('/post', [App\Http\Controllers\Api\PostController::class, 'index']);
Route::get('/post/{id?}', [App\Http\Controllers\Api\PostController::class, 'show']);
Route::get('/homepage/post', [App\Http\Controllers\Api\PostController::class, 'PostHomePage']);
//slider
Route::get('/slider', [App\Http\Controllers\Api\SliderController::class, 'index']);
//photo
Route::get('/photo', [App\Http\Controllers\Api\PhotoController::class, 'index']);
Route::get('/homepage/photo', [App\Http\Controllers\Api\PhotoController::class, 'PhotoHomepage']);

//video
Route::get('/video', [App\Http\Controllers\Api\VideoController::class, 'index']);
Route::get('/homepage/video', [App\Http\Controllers\Api\VideoController::class, 'VideoHomepage']);

//
Route::apiResource('/jumlahasn', App\Http\Controllers\Api\JumlahasnController::class);
// Route::apiResource('/jumlahasn', App\Http\Controllers\Api\JumlahasnController::class);
// Route::get('/jumlahasn', [App\Http\Controllers\Api\JumlahasnController::class, 'index']);
// Route::get('/jumlahppnpn', [App\Http\Controllers\Api\JumlahppnpnController::class, 'index']);