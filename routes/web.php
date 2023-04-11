<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/petugas', [App\Http\Controllers\PetugasController::class, 'index']);

Route::resource('/pegawai', PetugasController::class);
Route::resource('/buku', BukuController::class);
Route::resource('/anggota', AnggotaController::class);
Route::resource('/peminjaman', PeminjamanController::class);
Route::resource('/pengembalian', PengembalianController::class);

Route::get('/dashboard',function(){
    return view('dashboard');
});

Route::post('/cari', [App\Http\Controllers\PengembalianController::class, 'cari'])->name('cari');
Route::post('/jabar', [App\Http\Controllers\PeminjamanController::class, 'jabar'])->name('jabar');