<?php

namespace App\Http\Controllers;

class GuestController extends Controller
{
    // Menampilkan halaman Home (guest/home.blade.php)
    public function home()
    {
        return view('guest.home');
    }

    // Menampilkan halaman Contact Us (guest/contact.blade.php)
    public function contact()
    {
        return view('guest.contact');
    }
}
