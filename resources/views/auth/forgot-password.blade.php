@extends('layouts.guest.app')

@section('content')
    <!-- Hero Header Start -->
    <div class="container-xxl py-5 bg-dark hero-header mb-5">
        <div class="container my-5 py-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-12 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Lupa Password</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('login') }}">Login</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Lupa Password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Header End -->

    <!-- Forgot Password Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7">
                    <div class="bg-light rounded p-4 p-sm-5 my-4 shadow-sm border">
                        <div class="text-center mb-4">
                            <h1 class="text-primary ff-secondary fw-normal m-0"><i class="fa fa-key me-2"></i>Reset Password</h1>
                            <p class="text-muted mt-2">Masukkan email terdaftar dan password baru Anda</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show mb-4" role="alert">
                                <ul class="mb-0 ps-3">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('password.update') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" value="{{ old('email') }}" required autofocus>
                                <label for="email">Email Terdaftar</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password Baru" required>
                                <label for="password">Password Baru</label>
                            </div>

                            <div class="form-floating mb-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi Password Baru" required>
                                <label for="password_confirmation">Konfirmasi Password Baru</label>
                            </div>

                            <button class="btn btn-primary w-100 py-3 mb-3 fw-bold" type="submit">Simpan Password Baru</button>

                            <div class="text-center">
                                <a class="text-primary fw-bold small d-inline-block" href="{{ route('login') }}">← Kembali ke Halaman Login</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Forgot Password Form End -->
@endsection
