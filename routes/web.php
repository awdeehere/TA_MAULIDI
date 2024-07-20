<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PenghargaanController;
use App\Http\Controllers\Admin\PengrajinController;
use App\Http\Controllers\Admin\ProdukController;
use App\Http\Controllers\Admin\SejarahController;
use App\Http\Controllers\Admin\TentangKamiController;
use App\Http\Controllers\Admin\VideoPembuatanController;
use App\Http\Controllers\Admin\ArtikelController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Front\ClientController;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});

// Login
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);

// Admin
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard', DashboardController::class);
    Route::resource('sejarah', SejarahController::class);
    Route::resource('penghargaan', PenghargaanController::class);
    Route::resource('pengrajin', PengrajinController::class);
    Route::resource('video-pembuatan', VideoPembuatanController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('tentang-kami', TentangKamiController::class);
    Route::resource('artikel', ArtikelController::class);
});

Route::get('/', [ClientController::class, 'home']);
Route::get('home', [ClientController::class, 'home']);
Route::get('galeri', [ClientController::class, 'galeri']);
Route::get('katalog', [ClientController::class, 'katalog']);
Route::get('about', [ClientController::class, 'about']);
Route::get('product/{produk}', [ClientController::class, 'product']);
Route::get('artikel/{slug}', [ClientController::class, 'artikel']);