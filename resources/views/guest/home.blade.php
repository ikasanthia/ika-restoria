@extends('layouts.guest.app')

@section('content')
<!-- Hero Section -->
<div class="row align-items-center py-5 my-4">
    <div class="col-lg-6 py-3">
        <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-3">
            ✨ Kuliner Terbaik & Suasana Hangat
        </span>
        <h1 class="display-4 fw-bold text-dark mb-3 lh-base">
            Nikmati Kelezatan di <span class="text-primary">Restoria</span>
        </h1>
        <p class="text-muted lead mb-4">
            Tempat berkumpul terbaik untuk menikmati hidangan istimewa, kopi pilihan, dan momen berharga bersama orang tersayang.
        </p>
        <div class="d-flex gap-3">
            <a href="{{ url('/contact') }}" class="btn btn-primary btn-lg px-4 fw-semibold shadow-sm">
                Hubungi Kami
            </a>
            <a href="{{ url('/auth') }}" class="btn btn-outline-dark btn-lg px-4 fw-semibold">
                Login Admin
            </a>
        </div>
    </div>
    <div class="col-lg-6 text-center">
        <div class="p-4 bg-light rounded-4 shadow-sm border">
            <div class="py-5">
                <h3 class="fw-bold text-dark mb-2">Restoria Cafe & Resto</h3>
                <p class="text-muted mb-0">Buka Setiap Hari: 09.00 - 22.00 WIB</p>
                <div class="mt-3">
                    <span class="badge bg-success bg-opacity-10 text-success px-3 py-2 rounded-pill">Status: Buka Sekarang</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Features Section -->
<div class="row g-4 py-4 text-center">
    <div class="col-md-4">
        <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
            <div class="fs-1 mb-3">🍽️</div>
            <h5 class="fw-bold text-dark">Menu Berkualitas</h5>
            <p class="text-muted small mb-0">Disajikan langsung dari chef profesional dengan bahan-bahan segar pilihan.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
            <div class="fs-1 mb-3">☕</div>
            <h5 class="fw-bold text-dark">Kopi Spesial</h5>
            <p class="text-muted small mb-0">Biji kopi pilihan nusantara yang diracik khusus untuk menemani waktu santai Anda.</p>
        </div>
    </div>
    <div class="col-md-4">
        <div class="p-4 bg-white border rounded-4 shadow-sm h-100">
            <div class="fs-1 mb-3">🏡</div>
            <h5 class="fw-bold text-dark">Tempat Nyaman</h5>
            <p class="text-muted small mb-0">Desain interior estetik yang cocok untuk kerja kelompok, nugas, maupun bersantai.</p>
        </div>
    </div>
</div>
@endsection
