@extends('layouts.admin.app')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}">
                            <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                            </svg>
                        </a>
                    </li>
                    <li class="breadcrumb-item"><a href="{{ route('banners.index') }}">Kelola Banner</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Banner</li>
                </ol>
            </nav>
            <h2 class="h4">Tambah Banner Baru</h2>
            <p class="mb-0">Isi formulir di bawah ini untuk menambahkan banner baru.</p>
        </div>
        <div>
            <a href="{{ route('banners.index') }}" class="btn btn-sm btn-gray-800">Kembali</a>
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

    <div class="card card-body border-0 shadow mb-4">
        <form action="{{ route('banners.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="judul" class="form-label">Judul Banner</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ old('judul') }}" required placeholder="Masukkan judul banner">
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan deskripsi singkat banner">{{ old('deskripsi') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto Banner</label>
                <input type="file" class="form-control" id="foto" name="foto" required accept="image/jpeg,image/png,image/jpg">
                <small class="text-muted">Format yang diizinkan: JPG, JPEG, PNG (Maksimal 2MB).</small>
            </div>

            <button type="submit" class="btn btn-gray-800 mt-2">Simpan Banner</button>
        </form>
    </div>
@endsection