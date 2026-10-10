<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\KategoriController;

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
