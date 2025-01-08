<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdministrasiController;
use App\Http\Controllers\LapanganController;
use App\Http\Controllers\PelangganController;
use App\Models\Administrasi;
use App\Models\Lapangan;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth'])->group(function () {

    Route::resource('administrasi', AdministrasiController::class);
    Route::get('administrasi/laporan/cetak', [AdministrasiController::class, 'laporan']);

    Route::resource('lapangan', LapanganController::class);
    Route::get('lapangan/laporan/cetak', [LapanganController::class, 'laporan']);

    Route::resource('pelanggan',PelangganController::class);
    Route::get('pelanggan/laporan/cetak', [PelangganController::class, 'laporan']);
});
