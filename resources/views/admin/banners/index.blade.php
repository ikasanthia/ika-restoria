<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoria - Kelola Banner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #e9ecef;
            color: #333;
        }
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(180deg, #1f2b3e 0%, #16202e 100%);
            width: 260px;
            padding: 20px 15px;
        }
        .sidebar .brand {
            font-weight: 600;
            font-size: 1.15rem;
            color: #ffffff;
            padding: 10px 15px 25px 15px;
        }
        .sidebar .nav-link {
            color: #bdc8d7;
            padding: 12px 18px;
            border-radius: 10px;
            margin-bottom: 6px;
            font-size: 0.95rem;
            font-weight: 500;
            display: flex;
            align-items: center;
            transition: all 0.2s ease;
            text-decoration: none;
        }
        .sidebar .nav-link:hover {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.08);
        }
        .sidebar .nav-link.active {
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.15);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .main-content {
            padding: 30px 40px;
        }
        .breadcrumb-item a {
            color: #6c757d;
            text-decoration: none;
        }
        .card-custom {
            background: #ffffff;
            border-radius: 12px;
            border: none;
            box-shadow: 0 2px 10px rgba(0,0,0,0.03);
            padding: 24px;
        }
        .btn-green {
            background-color: #198754;
            color: #fff;
            border-radius: 8px;
            padding: 8px 18px;
            font-weight: 500;
        }
        .btn-green:hover { color: #fff; background-color: #157347; }
        .btn-edit-custom {
            background-color: #d8b384;
            color: #4a3319;
            border: none;
            border-radius: 6px;
            padding: 6px 16px;
            font-weight: 600;
        }
        .btn-delete-custom {
            background-color: #dc3545;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 6px 16px;
            font-weight: 600;
        }
        .table-custom th {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
            padding-y: 12px;
        }
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
        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-2">
                <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Kelola Banner</li>
            </ol>
        </nav>

        <!-- Page Header -->
        <div class="d-flex justify-content-between align-items-start mb-4">
            <div>
                <h2 class="fw-bold mb-1">Kelola Banner</h2>
                <p class="text-muted mb-0">Daftar banner promo dan informasi Restoria - Cafe & Resto.</p>
            </div>
            <div>
                <a href="{{ route('banners.create') }}" class="btn btn-green">+ Tambah Banner</a>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show rounded-3 mb-4" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- Card Container -->
        <div class="card-custom">
            <div class="table-responsive">
                <table class="table table-custom align-middle mb-0">
                    <thead>
                        <tr>
                            <th style="width: 50px;">#</th>
                            <th style="width: 130px;">FOTO</th>
                            <th>JUDUL BANNER</th>
                            <th>DESKRIPSI</th>
                            <th class="text-end" style="width: 180px;">AKSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($banners as $index => $banner)
                        <tr>
                            <td class="fw-normal text-muted">{{ $index + 1 }}</td>
                            <td>
                                <img src="{{ asset('storage/' . $banner->foto) }}" alt="Banner" width="90px" class="rounded border">
                            </td>
                            <td class="fw-semibold">{{ $banner->judul }}</td>
                            <td class="text-secondary">{{ Str::limit($banner->deskripsi, 60) }}</td>
                            <td class="text-end">
                                <a href="{{ route('banners.edit', $banner->id) }}" class="btn btn-edit-custom btn-sm me-1">Edit</a>
                                <form action="{{ route('banners.destroy', $banner->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus banner ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete-custom btn-sm">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center text-muted py-5">Belum ada data banner.</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
