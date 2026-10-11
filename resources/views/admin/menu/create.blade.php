<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Restoria - Tambah Menu</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="sidebar bg-dark text-white col-md-3 col-lg-4 d-md-block sidebar-sticky collapse" style="background-color: #111c33 !important;">
        <div class="position-relative pt-3 px-3">
            <div class="user-card d-flex d-md-none align-items-center justify-content-between justify-content-md-center pb-4">
                <div class="d-flex align-items-center">
                    <div class="block">
                        <a href="#" class="sidebar-text">Restoria - Cafe & Resto</a>
                    </div>
                </div>
            </div>

            <div class="sidebar-brand px-3 py-2 mb-3 text-white fw-bold" style="font-size: 1.05rem;">
                Restoria - Cafe & Resto
            </div>

            <ul class="nav flex-column pt-3 pt-md-0">
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path><path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path></svg>
                        </span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('menu.index') }}" class="nav-link">
                        <span class="sidebar-icon">
                            <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd"></path></svg>
                        </span>
                        <span class="sidebar-text">Kelola Menu</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Content Utama -->
    <main class="content px-4" style="margin-left: 260px;">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg></a></li>
                        <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Kelola Menu</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
                    </ol>
                </nav>
                <h2 class="h4">Tambah Menu Baru</h2>
                <p class="mb-0">Form untuk menambahkan data makanan atau minuman baru.</p>
            </div>
            <div>
                <a href="{{ route('menu.index') }}" class="btn btn-sm btn-gray-800">Kembali</a>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card card-body border-0 shadow mb-4">
            <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="nama_menu" class="form-label">Nama Menu</label>
                    <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ old('nama_menu') }}" required>
                </div>

                <div class="mb-3">
                    <label for="kategori_id" class="form-label">Kategori</label>
                    <select class="form-select" id="kategori_id" name="kategori_id" required>
                        <option value="">-- Pilih Kategori --</option>
                        @foreach($kategori as $kat)
                            <option value="{{ $kat->kategori_id }}">{{ $kat->nama_kategori }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="harga" class="form-label">Harga (Rp)</label>
                    <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga') }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi (Opsional)</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="foto" class="form-label">Foto Menu (Opsional)</label>
                    <input type="file" class="form-control" id="foto" name="foto">
                </div>

                <button type="submit" class="btn btn-gray-800 mt-2">Simpan Menu</button>
            </form>
        </div>
    </main>

    <!-- Core -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/onscreen/on-screen.umd.min.js') }}"></script>
    <script src="{{ asset('assets-admin/assets/js/volt.js') }}"></script>
</body>

</html>
