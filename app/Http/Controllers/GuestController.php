<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // <-- TAMBAHAN 1: Diimpor di atas agar Query Builder bisa dipakai

class GuestController extends Controller
{
    // Menampilkan halaman Home (guest/home.blade.php)
    public function home()
    {
        // TAMBAHAN 2: Mengambil data meja menggunakan Query Builder
        $tables = DB::table('tables')->get();

        // Mengirimkan variabel $tables ke view guest/home.blade.php
        return view('guest.home', compact('tables'));
    }

    // Menampilkan halaman Contact Us (guest/contact.blade.php)
    public function contact()
    {
        return view('guest.contact');
    }
}
