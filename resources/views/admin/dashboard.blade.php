@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4">Dashboard Admin Restoria</h2>
            <p class="mb-0">Selamat datang kembali di panel administrasi Restoria - Cafe & Resto.</p>
        </div>
    </div>

    {{-- Alert Sukses saat Login BERHASIL --}}
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            <i class="fa fa-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- STATISTIK RINGKASAN ATAS -->
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
@endsection
