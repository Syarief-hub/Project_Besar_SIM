<?php

use App\Http\Controllers\BuatSuratController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenuloginController;
use App\Http\Controllers\TentangController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/Buatsurat', [BuatSuratController::class, 'index']);
Route::get('/tentang', [TentangController::class, 'index']);
Route::get('/Menulogin', [MenuloginController::class, 'index']);

use Illuminate\Support\Facades\Auth;

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // arahkan ke halaman home
})->name('logout');
