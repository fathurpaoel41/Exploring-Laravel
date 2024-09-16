<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PenulisController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PenerbitController;

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

Route::middleware(['guest'])->group(function (){
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'AuthLogin'])->name('AuthLogin');
});

Route::middleware(['auth'])->group(function () {
    
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'indexDashboard')->name("Dashboard");
    });

    Route::controller(BukuController::class)->group(function () {
        Route::get('/daftar-buku', 'indexDaftarBuku')->name('Daftar-Buku');
        Route::get('/daftar-buku/tambah-buku', 'tambahBuku')->name('Tambah-Buku');
    });

    Route::controller(PenulisController::class)->group(function () {
        Route::get('/daftar-penulis', 'indexDaftarPenulis')->name('Daftar-Penulis');
        Route::get('/daftar-penulis/tambah-penulis','tambahPenulis')->name('Tambah-Penulis');

        Route::post('/daftar-penulis/tambah-penulis','createPenulis')->name('store-penulis');
    });

    Route::get('/logout', [AuthController::class, 'Authlogout'])->name('Authlogout');
});
