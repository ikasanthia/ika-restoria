<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoria - Tambah Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #e9ecef; color: #333; }
        .sidebar { min-height: 100vh; background: linear-gradient(180deg, #1f2b3e 0%, #16202e 100%); width: 260px; padding: 20px 15px; }
        .sidebar .brand { font-weight: 600; font-size: 1.15rem; color: #ffffff; padding: 10px 15px 25px 15px; }
        .sidebar .nav-link { color: #bdc8d7; padding: 12px 18px; border-radius: 10px; margin-bottom: 6px; font-size: 0.95rem; font-weight: 500; display: flex; align-items: center; transition: all 0.2s ease; text-decoration: none; }
        .sidebar .nav-link:hover { color: #ffffff; background-color: rgba(255, 255, 255, 0.08); }
        .sidebar .nav-link.active { color: #ffffff; background-color: rgba(255, 255, 255, 0.15); box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); }
        .main-content { padding: 30px 40px; }
        .card-custom { background: #ffffff; border-radius: 12px; border: none; box-shadow: 0 2px 10px rgba(0,0,0,0.03); padding: 24px; }
        .btn-green { background-color: #198754; color: #fff; border-radius: 8px; padding: 8px 18px; font-weight: 500; }
        .btn-green:hover { color: #fff; background-color: #157347; }
        .btn-outline-custom { border: 1px solid #ced4da; background: #fff; color: #333; border-radius: 8px; padding: 8px 18px; font-weight: 500; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>

<div class="d-flex">
    <!-- Sidebar -->
    <div class="sidebar flex-shrink-0">
        <div class="brand">
            Restoria - Cafe & Resto
        </div>
        <ul class="nav flex-column mt-2">
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <i class="fas fa-chart-pie me-3"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('banners.index') }}" class="nav-link active">
                    <i class="fas fa-image me-3"></i> Kelola Banner
                </a>
            </li>
        </ul>
    </div>

    <!-- Content -->
    <div class="main-content flex-grow-1">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item"><a href="{{ route('banners.index') }}" class="text-decoration-none text-secondary">Kelola Banner</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Banner</li>
            </ol>
        </nav>

        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h2 class="fw-bold mb-1">Tambah Banner Baru</h2>
                <p class="text-muted mb-0">Isi formulir di bawah ini untuk menambahkan banner baru.</p>
            </div>
            <div>
                <a href="{{ route('banners.index') }}" class="btn btn-outline-custom">Kembali ke Kelola Banner</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger rounded-3 mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-custom">
            <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label fw-semibold">Judul Banner</label>
                    <input type="text" class="form-control rounded-2" id="judul" name="judul" value="{{ old('judul') }}" required placeholder="Masukkan judul banner">
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label fw-semibold">Deskripsi</label>
                    <textarea class="form-control rounded-2" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi singkat banner">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="foto" class="form-label fw-semibold">Foto Banner</label>
                    <input type="file" class="form-control rounded-2" id="foto" name="foto" required accept="image/jpeg,image/png,image/jpg">
                    <div class="form-text text-muted">Format yang diizinkan: JPG, JPEG, PNG (Maksimal 2MB).</div>
                </div>

                <button type="submit" class="btn btn-green">Simpan Banner</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
