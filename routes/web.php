<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\UserController;

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

// Route tampilan Login & Register
Route::get('/login', function(){
    return view('auth.login');
    })->name('login');

Route::get('/register', function(){
    return view('auth.register');
    })->name('register');

Route::resource('kategori', KategoriController::class);

Route::resource('menu', MenuController::class);

Route::resource('banners', BannerController::class);

Route::resource('user', UserController::class);

