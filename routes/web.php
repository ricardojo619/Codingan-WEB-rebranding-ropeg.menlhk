<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
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

Route::get('/', function () {
    return view('index.body');
});
=======
Route::get('/', [BerandaController::class, 'beranda']);
Route::get('/beranda', [BerandaController::class, 'beranda']);
Route::get('/beranda/struktur', [BerandaController::class, 'struktur']);
>>>>>>> 00b1a4c9dd2a195e25da2d0513c3d371c966fc0f
