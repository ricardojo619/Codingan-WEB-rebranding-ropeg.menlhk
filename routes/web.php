<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/Profil', function () {
    return view('Profil.profil');
});

Route::get('/Berita', function () {
    return view('Berita.berita');
});

Route::get('/Regulasi', function () {
    return view('Regulasi.regulasi');
});

Route::get('/Pengpns', function () {
    return view('Adkep.Pengpns.pengpns');
});

Route::get('/Karpeg', function () {
    return view('Adkep.Karpeg.karpeg');
});

Route::get('/Karissu', function () {
    return view('Adkep.Karissu.karissu');
});

Route::get('/Altuglk', function () {
    return view('Adkep.Altug.Altuglk.altuglk');
});

Route::get('/Altugpemdal', function () {
    return view('Adkep.Altug.Altugpemdal.altugpemdal');
});

Route::get('/Altugpemdalk', function () {
    return view('Adkep.Altug.Altugpemdalk.altugpemdalk');
});

Route::get('/Bimtek', function () {
    return view('Adkep.Lhkpn.Bimtek.bimtek');
});

Route::get('/Forlhkpn', function () {
    return view('Adkep.Lhkpn.Forlhkpn.forlhkpn');
});

Route::get('/Menglhkpn', function () {
    return view('Adkep.Lhkpn.Menglhkpn.menglhkpn');
});

Route::get('/Prolhkpn', function () {
    return view('Adkep.Lhkpn.Prolhkpn.prolhkpn');
});

Route::get('/Pengel', function () {
    return view('Adkep.Pengel.pengel');
});

Route::get('/Izbel', function () {
    return view('Adkep.Pengpeg.Izbel.izbel');
});

Route::get('/PAC', function () {
    return view('Adkep.Pengpeg.PAC.pac');
});

Route::get('/Sel4kri', function () {
    return view('Adkep.Pengpeg.Sel4kri.sel4kri');
});

Route::get('/Seljalo', function () {
    return view('Adkep.Pengpeg.Seljalo.seljalo');
});

Route::get('/Ujdin', function () {
    return view('Adkep.Pengpeg.Ujdin.ujdin');
});

Route::get('/Ujgi', function () {
    return view('Adkep.Pengpeg.Ujgi.ujgi');
});

Route::get('/Penjadumen', function () {
    return view('Adkep.Pensiun.Penjadumen.penjadumen');
});

Route::get('/Penjadupemen', function () {
    return view('Adkep.Pensiun.Penjadupemen.penjadupemen');
});

Route::get('/Penjadute', function () {
    return view('Adkep.Pensiun.Penjadute.penjadute');
});

Route::get('/Penot', function () {
    return view('Adkep.Pensiun.Penot.penot');
});

Route::get('/Ralnamnip', function () {
    return view('Adkep.Ralnamnip.ralnamnip');
});

Route::get('/Binjas', function () {
    return view('Adkep.Satlen.Binjas.binjas');
});

Route::get('/Satlenkarsa', function () {
    return view('Adkep.Satlen.Satlenkarsa.satlenkarsa');
});

Route::get('/Satlenpem', function () {
    return view('Adkep.Satlen.Satlenpem.satlenpem');
});

Route::get('/Satlenwira', function () {
    return view('Adkep.Satlen.Satlenwira.satlenwira');
});