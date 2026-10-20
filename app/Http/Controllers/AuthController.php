<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan halaman/form Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Memproses submit Form Login (Soal 2)
    public function login(Request $request)
    {
        // Validasi inputan tidak boleh kosong
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Logika UTS: Jika Username dan Password SAMA PERSIS
        if ($request->username === $request->password) {
            // Redirect ke route admin dashboard
            return redirect()->route('dashboard')->with('success', 'Berhasil login!');
        }

        // Jika tidak sama, kembalikan ke halaman login dengan pesan error
        return redirect()->back()
            ->with('error', 'Login gagal! Username dan Password harus sama.')
            ->withInput();
    }
}
