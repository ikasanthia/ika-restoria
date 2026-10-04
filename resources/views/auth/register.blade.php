<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Register - Restoria Cafe & Resto</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets-guest/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-guest/css/style.css') }}" rel="stylesheet">
</head>

<body class="bg-dark">
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="bg-white rounded p-4 p-sm-5 my-4 mx-3 shadow">
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

                            <button class="btn btn-primary w-100 py-3 mb-3" type="submit">Daftar Sekarang</button>

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
</body>
</html>
