@extends('layouts.guest.app')

@section('content')
    <!-- Hero Header Start -->
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Halaman Login</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header End -->

    <!-- Login Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 shadow-sm border">
                        <div class="text-center mb-4">
                            <h1 class="text-primary ff-secondary fw-normal m-0"><i class="fa fa-utensils me-3"></i>Restoria</h1>
                            <p class="text-muted mt-2">Masuk ke Sistem Admin Restoria</p>
                        </div>

                        {{-- Alert Error saat Login GAGAL (Soal 2) --}}
                        @if (session('error'))
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <i class="fa fa-exclamation-circle me-2"></i>{{ session('error') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ url('/auth') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username" value="{{ old('username') }}" required autofocus>
                                <label for="username">Username</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                <label for="password">Password</label>
                            </div>

                            <button class="btn btn-primary w-100 py-3 mb-3 fw-bold" type="submit">Masuk</button>

                            <div class="text-center">
                                <p class="mb-0">Belum punya akun? <a class="text-primary fw-bold" href="{{ route('register') }}">Daftar di sini</a></p>
                                <a class="text-muted small mt-2 d-inline-block" href="{{ url('/') }}">← Kembali ke Beranda</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Form End -->
@endsection
