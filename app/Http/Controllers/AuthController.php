<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Menampilkan Halaman Form Login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Memproses Logika Login (Persyaratan UTS: Username === Password)
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($request->username === $request->password) {
            return redirect()->route('dashboard')->with('success', 'Selamat datang! Anda berhasil login sebagai Admin Restoria.');
        }

        return redirect()->back()
            ->with('error', 'Login gagal! Username dan Password harus sama.')
            ->withInput();
    }

    // Menampilkan Halaman Form Register
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // Memproses Registrasi (Simulasi Redirect ke Login dengan Alert Sukses)
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email',
            'password' => 'required|min:4|confirmed',
        ]);

        // Setelah berhasil mendaftar, kirim alert sukses ke halaman login
        return redirect()->route('login')->with('status', 'Registrasi akun berhasil! Silakan masuk dengan akun Anda.');
    }
}
