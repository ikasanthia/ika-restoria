<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

Route::get('/', [GuestController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');
