<?php
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
//Login
Route::get('/login', [AuthController::class, 'ShowLoginForm'])->name('FormLogin');
Route::get('/register', [AuthController::class, 'ShowRegisterForm'])->name('FormRegister');
Route::post('/register/akun', [AuthController::class, 'RegisterAccount'])->name('Register');
//Sidebar Move
Route::get('/Dashboard', [DashboardController::class, 'index'])->name('dashboard.page');
Route::get('/Kasir', [KasirController::class, 'index'])->name('kasir.page');
Route::get('/Produk', [ProdukController::class, 'index'])->name('produk.page');
Route::get('/Pelanggan', [PelangganController::class, 'index'])->name('pelanggan.page');
// Logika Produk
Route::get('/Produk/Tambah-Produk', [ProdukController::class, 'create'])->name('produk.add');
Route::post('/Produk/Store', [ProdukController::class, 'store'])->name('produk.store');
Route::delete('/Produk/{id}/Hapus', [ProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('/Produk/{id}/Edit-Form', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('/Produk/{id}/Edit', [ProdukController::class, 'update'])->name('produk.update');
// Logika Kasir
Route::post('/Tambah-Keranjang',[KasirController::class, 'store'])->name('AddToCart');
Route::get('/Form-Tambah-Keranjang/{id}',[KasirController::class, 'show'])->name('kasir.show');
// Logika Cart
Route::get('/Keranjang', [CartController::class, 'index'])->name('cart.page');
Route::delete('/keranjang/destroy/session/{id}', [CartController::class, 'destroy'])->name('cart.destroysession');
// Logika Orderan
Route::get('/Order', [OrderController::class, 'AddToOrder'])->name('AddToOrder');