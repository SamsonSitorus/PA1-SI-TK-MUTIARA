<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\ViewController;
use App\Http\Controllers\AdminController;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\guruController;
use App\Http\Controllers\prestasiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\JumlahsiswaController;
use App\Http\Controllers\tentangController;
use App\Models\prestasi;
use App\Http\Controllers\SearchController;
use App\Models\tentang;
use Illuminate\Contracts\Cache\Store;

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


Route::middleware('guest')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::post('/login', 'authenticate');
    });
});

Route::get('/profil', function () {
    $data = [
        'title' => "TK Mutiara Balige",
        'author' => "kelompok 10" 
    ];
    return view('profil', $data);
});

Route::get('/fasilitaskelas',[FasilitasController::class,'fasilitas']);
Route::get('/fasilitastaman',[FasilitasController::class,'fasilitas2']);


Route::get('/pencapaian',[prestasiController::class, 'pencapaian']);

Route::get('/tentang',[tentangController::class, 'index']);

Route::get('/pendaftaran',[PengumumanController::class,'pendaftaran']);

Route::controller(ViewController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/',[GalleryController::class, 'gallery']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', [DashboardController::class, 'index']);
    Route::controller(AdminController::class)->group(function () {
        Route::get('/admin', 'index');
        Route::get('/admin/create', 'create');
        Route::post('/admin', 'store');
    });

    Route::post('/logout', [LoginController::class, 'logout']);
});

Route::resource('pengumuman', PengumumanController::class);
Route::get('pengumuman/{id}', [PengumumanController::class, 'show'])->name('pengumuman.showw');
Route::resource('jumlah', JumlahsiswaController::class);
Route::resource('/gallery', GalleryController::class);

Route::controller(GalleryController::class)->group(function(){
    Route::get('/gallery', 'index')->name('gallery.index');
    Route::get('/gallery/create', 'create')->name('gallery.create');
    Route::post('/gallery', 'store')->name('gallery.store');
});
Route::put('/dashboard/gallery/{id}', [GalleryController::class, 'update'])->name('gallery.updatee');

Route::resource('/prestasi', prestasiController::class);
Route::controller(prestasiController::class)->group(function(){
    Route::get('/prestasi', 'index')->name('prestasi.index');
    Route::get('/prestasi/create', 'create')->name('prestasi.create');
    Route::post('/prestasi', 'store')->name('prestasi.store');
});
Route::put('/dashboard/prestasi/{id}', [prestasiController::class, 'update'])->name('prestasi.updatee');



Route::resource('/guru', guruController::class);
Route::controller(guruController::class)->group(function(){
    Route::get('/guru', 'index')->name('guru.index');
    Route::get('/guru/create', 'create')->name('guru.create');
    Route::post('/guru', 'store')->name('guru.store');
});
Route::put('/dashboard/guru/{id}', [guruController::class, 'update'])->name('guru.updatee');


Route::get('/kategoris', [KategoriController::class, 'index'])->name('kategoris.index');
Route::get('/kategoris/create', [KategoriController::class, 'create'])->name('kategoris.create');
Route::post('/kategoris', [KategoriController::class, 'store'])->name('kategoris.store');
Route::get('/kategoris/{kategori}/edit', [KategoriController::class, 'edit'])->name('kategoris.edit');
Route::put('/kategoris/{kategori}', [KategoriController::class, 'update'])->name('kategoris.update');
Route::delete('/kategoris/{kategori}', [KategoriController::class, 'destroy'])->name('kategoris.destroy');
Route::get('/fasilitas/detail/{id}', [FasilitasController::class, 'show'])->name('show5');
Route::get('/fasilitas/kategori/{kategoriId}', [FasilitasController::class, 'index'])->name('fasilitas.index');

Route::get('/fasilitas/{kategoriId}/create', [FasilitasController::class, 'create'])->name('fasilitas.create');
Route::post('/fasilitas', [FasilitasController::class, 'store'])->name('fasilitas.store');
Route::put('/fasilitas/{fasilitas}', [FasilitasController::class, 'update'])->name('fasilitas.update');
Route::delete('/fasilitas/{fasilitas}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
Route::get('/fasilitas/{fasilitas}/edit', [FasilitasController::class, 'edit'])->name('fasilitas.edit');



Route::get('/search', [SearchController::class, 'search'])->name('search');
