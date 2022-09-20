<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

----------------------------------------------------------------
php artisan storage:link
composer dump-autoload
php artisan migrate --seed
php artisan route:list
php artisan migrate:fresh
php artisan vendor:publish --tag=laravel-pagination
----------------------------------------------------------------
php artisan make:controller Api/PostController
php artisan make:controller Api/JumlahppnpnController
php artisan make:controller Api/JumlahasnController
----------------------------------------------------------------
php artisan make:model Category -m
php artisan make:model Footer -m
php artisan make:model Galeri -m
php artisan make:model Header -m
php artisan make:model Image -m
php artisan make:model Jumlahasn -m
php artisan make:model Jumlahppnpn -m
php artisan make:model Peraturan -m
php artisan make:model Photo -m
php artisan make:model Artikel -m
php artisan make:model Profil -m
php artisan make:model Running -m
php artisan make:model Slider -m
php artisan make:model Struktur -m
php artisan make:model Unggahfile -m
php artisan make:model Video -m
----------------------------------------------------------------
php artisan make:controller Admin/DashboardController
php artisan make:controller Admin/CategoryController --resource
php artisan make:controller Admin/FooterController --resource
php artisan make:controller Admin/GaleriController --resource
php artisan make:controller Admin/HeaderController --resource
php artisan make:controller Admin/JumlahasnController --resource
php artisan make:controller Admin/JumlahppnpnController --resource
php artisan make:controller Admin/PeraturanController --resource
php artisan make:controller Admin/PhotoController --resource
php artisan make:controller Admin/ArtikelController --resource
php artisan make:controller Admin/ProfilController --resource
php artisan make:controller Admin/RunningController --resource
php artisan make:controller Admin/SliderController --resource
php artisan make:controller Admin/StrukturController --resource
php artisan make:controller Admin/UnggahfileController --resource
----------------------------------------------------------------
php artisan make:controller Api/PhotoController
php artisan make:controller Api/PostController
php artisan make:controller Api/SliderController
php artisan make:controller Api/VideoController
----------------------------------------------------------------
php artisan make:seeder Jumlahppnpn
php artisan make:seeder Jumlahasn
php artisan db:seed --class=JumlahppnpnSeeder
php artisan db:seed --class=JumlahasnSeeder
----------------------------------------------------------------
*/

// Route::get('/', function () {
//     return view('index.body');
// });

// /* Halaman Admin Test */

// Route::get('/adminDashboard', function () {
//     return view('admin.index');
// });
// Auth::routes(['register' => false]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', 'App\Http\Controllers\BlogController@index');
Route::get('/beranda', 'App\Http\Controllers\BlogController@index');
Route::get('/list-berita', [App\Http\Controllers\BlogController::class, 'list_berita']);
Route::get('/baca/{isi_slug}', [App\Http\Controllers\BlogController::class, 'isi_slug']);
Route::get('/foto/{isi_foto}', [App\Http\Controllers\BlogController::class, 'isi_foto']);
Route::get('/profil-ropeg-klhk/{isi_profil}', [App\Http\Controllers\BlogController::class, 'isi_profil']);
Route::get('/struktur-organisasi/{isi_struktur}', [App\Http\Controllers\BlogController::class, 'isi_struktur']);

Route::resource('/jumlahasn', App\Http\Controllers\Admin\JumlahasnController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/header', App\Http\Controllers\Admin\HeaderController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/footer', App\Http\Controllers\Admin\FooterController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/galeri', App\Http\Controllers\Admin\GaleriController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/photo', App\Http\Controllers\Admin\PhotoController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/struktur', App\Http\Controllers\Admin\StrukturController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/running', App\Http\Controllers\Admin\RunningController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/slider', App\Http\Controllers\Admin\SliderController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/profil', App\Http\Controllers\Admin\ProfilController::class, ['except' => ['show'], 'as' => 'admin']);
Route::resource('/artikel', App\Http\Controllers\Admin\ArtikelController::class, ['except' => ['show'], 'as' => 'admin']);

// Category
Route::get('/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');
Route::get('/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');
Route::post('/category/tambahpost', [App\Http\Controllers\Admin\CategoryController::class, 'store'])->name('admin.category.store');
Route::post('/category/update/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin.category.destroy');

// post

// Route::get('/chart', [App\Http\Controllers\Admin\ChartJSController::class, 'loadChartData']);

Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard.index');


/* ============== */

/* Berita */
Route::get('/editBerita/{id}', [AdminController::class, 'editBerita']);
Route::post('/editIsiBerita/{id}', [AdminController::class, 'editIsiBerita']);
Route::get('/adminBerita', [AdminController::class, 'adminBerita']);
Route::post('/tambahBerita', [AdminController::class, 'tambahBerita']);
Route::get('/deletePost/{id}', [AdminController::class, 'deletePost']);

/*Run Text */
Route::get('/adminRuntext', [AdminController::class, 'adminRuntext']);
Route::post('/tambahRuntext', [AdminController::class, 'tambahRuntext']);
Route::get('/editRuntext/{id}', [AdminController::class, 'editRuntext']);
Route::post('/editRuntext/{id}/edit', [AdminController::class, 'updateRuntext']);
Route::get('/deleteRuntext/{id}', [AdminController::class, 'deleteRuntext']);




/* Halaman Front-end */

// Route::get('/', [BerandaController::class, 'beranda']);
// Route::get('/beranda', [BerandaController::class, 'beranda']);
// Route::get('/detailberita', [BerandaController::class, 'detailberita']);
// Route::get('/beranda/struktur', [BerandaController::class, 'struktur']);
// Route::get('/Profil', [BerandaController::class, 'profil']);
// Route::get('/Berita', [BerandaController::class, 'berita']);
// Route::get('/Pengpns', [BerandaController::class, 'pengpns']);
// Route::get('/Karpeg', [BerandaController::class, 'karpeg']);
// Route::get('/Karissu', [BerandaController::class, 'karissu']);
// Route::get('/Altuglk', [BerandaController::class, 'altuglk']);
// Route::get('/Altugpemdal', [BerandaController::class, 'altugpemdal']);
// Route::get('/Altugpemdalk', [BerandaController::class, 'altugpemdalk']);
// Route::get('/Ujdin', [BerandaController::class, 'ujdin']);
// Route::get('/Ujgi', [BerandaController::class, 'ujgi']);
// Route::get('/Izbel', [BerandaController::class, 'izbel']);
// Route::get('/Sel4kri', [BerandaController::class, 'sel4kri']);
// Route::get('/T1', [BerandaController::class, 't1']);
// Route::get('/T2', [BerandaController::class, 't2']);
// Route::get('/T3', [BerandaController::class, 't3']);
// Route::get('/T4', [BerandaController::class, 't4']);
// Route::get('/PAC', [BerandaController::class, 'pac']);
// Route::get('/Seljalo', [BerandaController::class, 'seljalo']);
// Route::get('/Menglhkpn', [BerandaController::class, 'menglhkpn']);
// Route::get('/Prolhkpn', [BerandaController::class, 'prolhkpn']);
// Route::get('/Bimtek', [BerandaController::class, 'bimtek']);
// Route::get('/Forlhkpn', [BerandaController::class, 'forlhkpn']);
// Route::get('/Penot', [BerandaController::class, 'penot']);
// Route::get('/Penjadute', [BerandaController::class, 'penjadute']);
// Route::get('/Penjadumen', [BerandaController::class, 'penjadumen']);
// Route::get('/Penjadupemen', [BerandaController::class, 'penjadupemen']);
// Route::get('/Binjas', [BerandaController::class, 'binjas']);
// Route::get('/Satlenpem', [BerandaController::class, 'satlenpem']);
// Route::get('/Satlenkarsa', [BerandaController::class, 'satlenkarsa']);
// Route::get('/Satlenwira', [BerandaController::class, 'satlenwira']);
// Route::get('/Pengel', [BerandaController::class, 'pengel']);
// Route::get('/Ralnamnip', [BerandaController::class, 'ralnamnip']);
// Route::get('/Kenpangre', [BerandaController::class, 'kenpangre']);
// Route::get('/Kenpangstru', [BerandaController::class, 'kenpangstru']);
// Route::get('/Kenpangfu', [BerandaController::class, 'kenpangfu']);
// Route::get('/Kenpangpe', [BerandaController::class, 'kenpangpe']);
// Route::get('/Altugk', [BerandaController::class, 'altugk']);
// Route::get('/Ujgipi', [BerandaController::class, 'ujgipi']);
// Route::get('/Izbell', [BerandaController::class, 'izbell']);
// Route::get('/Sel4krii', [BerandaController::class, 'sel4krii']);
// Route::get('/Dikpem', [BerandaController::class, 'dikpem']);
// Route::get('/Pengempac', [BerandaController::class, 'pengempac']);
// Route::get('/Verkpk', [BerandaController::class, 'verkpk']);
// Route::get('/Satlencana', [BerandaController::class, 'satlencana']);
// Route::get('/Inpassing', [BerandaController::class, 'inpassing']);
// Route::get('/Penkemkar', [BerandaController::class, 'penkemkar']);
// Route::get('/Regulasi', [BerandaController::class, 'regulasi']);
// Route::get('/BUP', [BerandaController::class, 'bup']);
// Route::get('/KPO', [BerandaController::class, 'kpo']);
// Route::get('/Struktural', [BerandaController::class, 'struktural']);
// Route::get('/Pengcpns', [BerandaController::class, 'pengcpns']);
// Route::get('/Simpegsapk', [BerandaController::class, 'simpegsapk']);
// Route::get('/Bimtekadm', [BerandaController::class, 'bimtekadm']);
// Route::get('/Btnlihse', [BerandaController::class, 'btnlihse']);
// Route::get('/Selterjpt', [BerandaController::class, 'selterjpt']);
// Route::get('/Pengskdcpns', [BerandaController::class, 'pengskdcpns']);
// Route::get('/Sosmysapk', [BerandaController::class, 'sosmysapk']);


// Route::get('/bupjanuari', [BerandaController::class, 'bupjanuari']);
// Route::get('/bupfebruari', [BerandaController::class, 'bupfebruari']);
// Route::get('/bupmaret', [BerandaController::class, 'bupmaret']);
// Route::get('/bupapril', [BerandaController::class, 'bupapril']);
// Route::get('/bupmei', [BerandaController::class, 'bupmei']);
// Route::get('/bupjuni', [BerandaController::class, 'bupjuni']);
// Route::get('/bupjuli', [BerandaController::class, 'bupjuli']);
// Route::get('/bupagustus', [BerandaController::class, 'bupagustus']);
// Route::get('/bupseptember', [BerandaController::class, 'bupseptember']);
// Route::get('/bupoktober', [BerandaController::class, 'bupoktober']);
// Route::get('/bupnovember', [BerandaController::class, 'bupnovember']);
// Route::get('/bupdesember', [BerandaController::class, 'bupdesember']);