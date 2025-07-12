<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return view('welcome');
});

//Sidebar Move
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard.page');
Route::get('/Kasir', [KasirController::class, 'index'])->name('kasir.page');
Route::get('/Produk', [ProdukController::class, 'index'])->name('produk.page');
Route::get('/Pelanggan', [PelangganController::class, 'index'])->name('pelanggan.page');