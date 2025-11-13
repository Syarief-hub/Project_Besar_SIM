<?php

use App\Http\Controllers\BuatSuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuloginController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PermintaanSuratController;
use App\Http\Controllers\SuratSelesaiController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\TentangController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [LoginController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/permintaan', [PermintaanSuratController::class, 'index']);
Route::get('/suratselesai', [SuratSelesaiController::class, 'index']);
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/penduduk', [PendudukController::class, 'index'])->name('penduduk.index');
Route::post('/penduduk', [PendudukController::class, 'store'])->name('penduduk.store');
Route::put('/penduduk/{id}', [PendudukController::class, 'update'])->name('penduduk.update');
Route::delete('/penduduk/{id}', [PendudukController::class, 'destroy'])->name('penduduk.destroy');
Route::get('/login', [LoginController::class, 'index']);
Route::get('/Buatsurat', [BuatSuratController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/Menulogin', [MenuloginController::class, 'index']);

Route::post('/Menulogin', [MenuloginController::class, 'authenticate'])->name('Menulogin.post');
Route::post('/logout', [MenuloginController::class, 'logout'])->name('logout');
Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');