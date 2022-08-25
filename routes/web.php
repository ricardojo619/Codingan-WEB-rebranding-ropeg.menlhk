<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\AdminController;
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

/* Halaman Admin Test */

Route::get('/adminDashboard', function () {
    return view('admin.index');
});
Route::get('/editBerita/{id}', [AdminController::class, 'editBerita']);
Route::get('/adminBerita', [AdminController::class, 'adminBerita']);

Route::post('/tambahBerita', [AdminController::class, 'tambahBerita']);
Route::get('/deletePost/{id}',[AdminController::class,'deletePost']);



/* Halaman Front-end */

Route::get('/', [BerandaController::class, 'beranda']);
Route::get('/beranda', [BerandaController::class, 'beranda']);
Route::get('/detailberita', [BerandaController::class, 'detailberita']);
Route::get('/beranda/struktur', [BerandaController::class, 'struktur']);
Route::get('/Profil', [BerandaController::class, 'profil']);
Route::get('/Berita', [BerandaController::class, 'berita']);
Route::get('/Pengpns', [BerandaController::class, 'pengpns']);
Route::get('/Karpeg', [BerandaController::class, 'karpeg']);
Route::get('/Karissu', [BerandaController::class, 'karissu']);
Route::get('/Altuglk', [BerandaController::class, 'altuglk']);
Route::get('/Altugpemdal', [BerandaController::class, 'altugpemdal']);
Route::get('/Altugpemdalk', [BerandaController::class, 'altugpemdalk']);
Route::get('/Ujdin', [BerandaController::class, 'ujdin']);
Route::get('/Ujgi', [BerandaController::class, 'ujgi']);
Route::get('/Izbel', [BerandaController::class, 'izbel']);
Route::get('/Sel4kri', [BerandaController::class, 'sel4kri']);
Route::get('/T1', [BerandaController::class, 't1']);
Route::get('/T2', [BerandaController::class, 't2']);
Route::get('/T3', [BerandaController::class, 't3']);
Route::get('/T4', [BerandaController::class, 't4']);
Route::get('/PAC', [BerandaController::class, 'pac']);
Route::get('/Seljalo', [BerandaController::class, 'seljalo']);
Route::get('/Menglhkpn', [BerandaController::class, 'menglhkpn']);
Route::get('/Prolhkpn', [BerandaController::class, 'prolhkpn']);
Route::get('/Bimtek', [BerandaController::class, 'bimtek']);
Route::get('/Forlhkpn', [BerandaController::class, 'forlhkpn']);
Route::get('/Penot', [BerandaController::class, 'penot']);
Route::get('/Penjadute', [BerandaController::class, 'penjadute']);
Route::get('/Penjadumen', [BerandaController::class, 'penjadumen']);
Route::get('/Penjadupemen', [BerandaController::class, 'penjadupemen']);
Route::get('/Binjas', [BerandaController::class, 'binjas']);
Route::get('/Satlenpem', [BerandaController::class, 'satlenpem']);
Route::get('/Satlenkarsa', [BerandaController::class, 'satlenkarsa']);
Route::get('/Satlenwira', [BerandaController::class, 'satlenwira']);
Route::get('/Pengel', [BerandaController::class, 'pengel']);
Route::get('/Ralnamnip', [BerandaController::class, 'ralnamnip']);
Route::get('/Kenpangre', [BerandaController::class, 'kenpangre']);
Route::get('/Kenpangstru', [BerandaController::class, 'kenpangstru']);
Route::get('/Kenpangfu', [BerandaController::class, 'kenpangfu']);
Route::get('/Kenpangpe', [BerandaController::class, 'kenpangpe']);
Route::get('/Altugk', [BerandaController::class, 'altugk']);
Route::get('/Ujgipi', [BerandaController::class, 'ujgipi']);
Route::get('/Izbell', [BerandaController::class, 'izbell']);
Route::get('/Sel4krii', [BerandaController::class, 'sel4krii']);
Route::get('/Dikpem', [BerandaController::class, 'dikpem']);
Route::get('/Pengempac', [BerandaController::class, 'pengempac']);
Route::get('/Verkpk', [BerandaController::class, 'verkpk']);
Route::get('/Satlencana', [BerandaController::class, 'satlencana']);
Route::get('/Inpassing', [BerandaController::class, 'inpassing']);
Route::get('/Penkemkar', [BerandaController::class, 'penkemkar']);
Route::get('/Regulasi', [BerandaController::class, 'regulasi']);
Route::get('/BUP', [BerandaController::class, 'bup']);
Route::get('/KPO', [BerandaController::class, 'kpo']);
Route::get('/Struktural', [BerandaController::class, 'struktural']);
Route::get('/Pengcpns', [BerandaController::class, 'pengcpns']);
Route::get('/Simpegsapk', [BerandaController::class, 'simpegsapk']);
Route::get('/Bimtekadm', [BerandaController::class, 'bimtekadm']);
Route::get('/Btnlihse', [BerandaController::class, 'btnlihse']);
Route::get('/Selterjpt', [BerandaController::class, 'selterjpt']);
Route::get('/Pengskdcpns', [BerandaController::class, 'pengskdcpns']);
Route::get('/Sosmysapk', [BerandaController::class, 'sosmysapk']);
