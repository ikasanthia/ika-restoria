@extends('layouts.guest.app')

@section('content')
    <!-- Hero Header Start -->
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Pendaftaran Akun</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Register</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header End -->

    <!-- Register Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 shadow-sm border">
                        <div class="text-center mb-4">
                            <h1 class="text-primary ff-secondary fw-normal m-0"><i class="fa fa-utensils me-3"></i>Restoria</h1>
                            <p class="text-muted mt-2">Buat akun baru untuk mulai memesan & reservasi</p>
                        </div>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" value="{{ old('name') }}" required>
                                <label for="name">Nama Lengkap</label>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Alamat Email" value="{{ old('email') }}" required>
                                <label for="email">Alamat Email</label>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Kata Sandi" required>
                                <label for="password">Kata Sandi</label>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Kata Sandi" required>
                                <label for="password_confirmation">Konfirmasi Kata Sandi</label>
                            </div>

                            <button class="btn btn-primary w-100 py-3 mb-3 fw-bold" type="submit">Daftar Sekarang</button>

                            <div class="text-center">
                                <p class="mb-0">Sudah punya akun? <a class="text-primary fw-bold" href="{{ route('login') }}">Login di sini</a></p>
                                <a class="text-muted small mt-2 d-inline-block" href="{{ url('/') }}">← Kembali ke Beranda</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Register Form End -->
@endsection
