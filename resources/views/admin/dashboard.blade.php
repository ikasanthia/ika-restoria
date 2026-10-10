<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Admin Dashboard - Restoria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Volt CSS -->
    <link type="text/css" href="{{ asset('assets-admin/css/volt.css') }}" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>

    <!-- NAVBAR MOBILE -->
    <nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
        <a class="navbar-brand me-lg-5" href="#">
            <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/logo-restoria.jpeg') }}" alt="Logo Restoria" />
        </a>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <!-- SIDEBAR NAVIGASI DESKTOP -->
    <nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
        <div class="sidebar-inner px-4 pt-3">

            <!-- BRAND LOGO RESTORIA (Dengan Badge Kuning Admin Panel) -->
            <div class="user-card d-flex align-items-center justify-content-start pb-3 mb-3 border-bottom border-gray-700">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets-admin/img/logo-restoria-fix.png') }}" class="avatar-md img-fluid rounded me-3" alt="Logo Restoria" style="object-fit: cover;">
                    <div class="d-block">
                        <h2 class="h5 mb-0 font-weight-bold text-white">Restoria</h2>
                        <span class="badge bg-warning text-dark mt-1">Admin Panel</span>
                    </div>
                </div>
            </div>

            <!-- MENU SIDEBAR -->
            <ul class="nav flex-column pt-3 pt-md-0">

                <li class="nav-item active">
                    <a href="{{ route('dashboard') }}" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-speedometer2"></i></span>
                        <span class="sidebar-text">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-cup-hot"></i></span>
                        <span class="sidebar-text">Kelola Menu</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('kategori.index') }}" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-tags"></i></span>
                        <span class="sidebar-text">Kelola Kategori</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-cart-check"></i></span>
                        <span class="sidebar-text">Kelola Pesanan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-calendar-event"></i></span>
                        <span class="sidebar-text">Kelola Reservasi</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-people"></i></span>
                        <span class="sidebar-text">Kelola Pelanggan</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-images"></i></span>
                        <span class="sidebar-text">Kelola Banner</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-grid-3x3-gap"></i></span>
                        <span class="sidebar-text">Kelola Galeri</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <span class="sidebar-icon"><i class="bi bi-clock-history"></i></span>
                        <span class="sidebar-text">Riwayat Pesanan</span>
                    </a>
                </li>

                <li class="nav-item pt-3 border-top border-gray-700 mt-3">
                    <a href="#" class="nav-link text-danger">
                        <span class="sidebar-icon"><i class="bi bi-box-arrow-right"></i></span>
                        <span class="sidebar-text">Logout</span>
                    </a>
                </li>

            </ul>
        </div>
    </nav>

    <!-- KONTEN UTAMA -->
    <main class="content">

        <!-- TOPBAR HEADER -->
        <nav class="navbar navbar-top navbar-expand navbar-dashboard navbar-dark ps-0 pe-2 pb-0 mb-4">
            <div class="container-fluid px-0">
                <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
                    <div class="d-flex align-items-center">
                        <h1 class="h4 mb-0">Dashboard Admin Restoria</h1>
                    </div>
                    <!-- User Admin Dropdown (Foto Profil) -->
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item dropdown ms-lg-3">
                            <a class="nav-link dropdown-toggle pt-1 px-0" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="media d-flex align-items-center">
                                    <img class="avatar rounded-circle" alt="Admin" src="{{ asset('assets-admin/img/team/admin-profile.png') }}" style="object-fit: cover;">
                                    <div class="media-body ms-2 text-dark align-items-center d-none d-lg-block">
                                        <span class="mb-0 font-small font-weight-bold text-gray-900">Administrator Restoria</span>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dashboard-dropdown dropdown-menu-end mt-2 py-1">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <i class="bi bi-person me-2"></i> Profil Admin
                                </a>
                                <div class="dropdown-divider my-1"></div>
                                <a class="dropdown-item d-flex align-items-center text-danger" href="#">
                                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- STATISTIK RINGKASAN ATAS (NILAI NOL) -->
        <div class="row">
            <!-- Penjualan Hari Ini -->
            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-4 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-primary rounded me-4 me-sm-0">
                                    <i class="bi bi-cash-stack fs-3"></i>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 px-xl-0">
                                <div class="d-sm-block">
                                    <span class="h6 text-gray-400">Penjualan Hari Ini</span>
                                    <h4 class="fw-extrabold mt-1 mb-0">Rp 0</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Total Pesanan -->
            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-4 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-secondary rounded me-4 me-sm-0">
                                    <i class="bi bi-bag-check fs-3"></i>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 px-xl-0">
                                <div class="d-sm-block">
                                    <span class="h6 text-gray-400">Total Pesanan</span>
                                    <h4 class="fw-extrabold mt-1 mb-0">0 Pesanan</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Reservasi Aktif -->
            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-4 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                    <i class="bi bi-journal-bookmark fs-3"></i>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 px-xl-0">
                                <div class="d-sm-block">
                                    <span class="h6 text-gray-400">Reservasi Aktif</span>
                                    <h4 class="fw-extrabold mt-1 mb-0">0 Meja</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pelanggan -->
            <div class="col-12 col-sm-6 col-xl-3 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-body">
                        <div class="row d-block d-xl-flex align-items-center">
                            <div class="col-12 col-xl-4 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                <div class="icon-shape icon-shape-info rounded me-4 me-sm-0">
                                    <i class="bi bi-people fs-3"></i>
                                </div>
                            </div>
                            <div class="col-12 col-xl-8 px-xl-0">
                                <div class="d-sm-block">
                                    <span class="h6 text-gray-400">Pelanggan</span>
                                    <h4 class="fw-extrabold mt-1 mb-0">0 User</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- GRAFIK PENJUALAN & RINGKASAN RESERVASI -->
        <div class="row">
            <!-- Tampilan Grafik Penjualan -->
            <div class="col-12 col-xl-8 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header d-flex flex-row align-items-center flex-0 border-bottom">
                        <div class="d-block">
                            <div class="h6 fw-normal text-gray mb-1">Statistik Penjualan Bulan Ini</div>
                            <div class="h3 fw-extrabold">Rp 0</div>
                        </div>
                    </div>
                    <div class="card-body p-3 text-center">
                        <div class="p-4 bg-light rounded">
                            <svg viewBox="0 0 500 150" class="w-100" style="max-height: 200px;">
                                <line x1="0" y1="30" x2="500" y2="30" stroke="#e0e0e0" stroke-dasharray="4"/>
                                <line x1="0" y1="75" x2="500" y2="75" stroke="#e0e0e0" stroke-dasharray="4"/>
                                <line x1="0" y1="120" x2="500" y2="120" stroke="#e0e0e0" stroke-dasharray="4"/>
                                <polyline fill="none" stroke="#262b40" stroke-width="3" points="0,120 100,120 200,120 300,120 400,120 500,120" />
                            </svg>
                            <div class="d-flex justify-content-between text-muted mt-2 px-2" style="font-size: 12px;">
                                <span>Minggu 1</span>
                                <span>Minggu 2</span>
                                <span>Minggu 3</span>
                                <span>Minggu 4</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ringkasan Reservasi Meja -->
            <div class="col-12 col-xl-4 mb-4">
                <div class="card border-0 shadow">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">Ringkasan Reservasi</h2>
                    </div>
                    <div class="card-body text-center py-5 text-muted">
                        <i class="bi bi-inbox fs-1 d-block mb-2 text-gray-400"></i>
                        <p class="mb-0 font-small">Belum ada reservasi terbaru masuk.</p>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <!-- VOLT Core JS -->
    <script src="{{ asset('assets-admin/vendor/@popperjs/core/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('assets-admin/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets-admin/js/volt.js') }}"></script>

</body>

</html>
