<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TableController;

// Route publik (Guest & Pelanggan)
Route::get('/', [GuestController::class, 'home'])->name('home');
Route::get('/contact', [GuestController::class, 'contact'])->name('contact');

// Proses simpan reservasi dari form halaman utama (tetap cek Auth::check() di controller)
Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

// Route tampilan Login & Register
Route::get('/login', function () {
    return view ('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/auth', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/auth', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route khusus Admin (terproteksi RoleMiddleware)
Route::middleware('role:admin')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('banners', BannerController::class);
    Route::resource('user', UserController::class);
    Route::resource('reservations', ReservationController::class)->except(['store']);
    Route::resource('tables', TableController::class);
});