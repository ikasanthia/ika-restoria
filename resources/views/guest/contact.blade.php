@extends('layouts.guest.app')

@section('content')
<div class="row justify-content-center py-5">
    <div class="col-lg-8">
        <div class="text-center mb-5">
            <span class="badge bg-primary bg-opacity-10 text-primary px-3 py-2 rounded-pill fw-semibold mb-2">
                📍 Lokasi & Kontak
            </span>
            <h2 class="fw-bold text-dark display-6">Hubungi Restoria</h2>
            <p class="text-muted">Punya pertanyaan seputar reservasi, menu, atau kerja sama? Silakan hubungi kami melalui informasi di bawah.</p>
        </div>

        <div class="row g-4">
            <!-- Info Card 1 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                    <div class="fs-2 mb-2">📍</div>
                    <h6 class="fw-bold text-dark mb-2">Alamat</h6>
                    <p class="text-muted small mb-0">Jl. Umban Sari No. 1, Rumbai, Pekanbaru, Riau</p>
                </div>
            </div>
            <!-- Info Card 2 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                    <div class="fs-2 mb-2">📞</div>
                    <h6 class="fw-bold text-dark mb-2">WhatsApp / Telepon</h6>
                    <p class="text-muted small mb-0">+62 822-8306-5924</p>
                </div>
            </div>
            <!-- Info Card 3 -->
            <div class="col-md-4">
                <div class="card border-0 shadow-sm rounded-4 p-4 text-center h-100">
                    <div class="fs-2 mb-2">✉️</div>
                    <h6 class="fw-bold text-dark mb-2">Email Resmi</h6>
                    <p class="text-muted small mb-0">info@restoria.com</p>
                </div>
            </div>
        </div>

        <!-- Optional Map Box / Additional Info -->
        <div class="card border-0 shadow-sm rounded-4 p-4 mt-4 bg-light text-center">
            <h5 class="fw-bold text-dark mb-2">Jam Operasional</h5>
            <p class="text-muted mb-1">Senin - Minggu: 09.00 - 22.00 WIB</p>
            <p class="text-primary small fw-semibold mb-0">Reservasi meja tersedia melalui telepon di atas.</p>
        </div>
    </div>
</div>
@endsection
