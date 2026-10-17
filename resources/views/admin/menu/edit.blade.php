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
                    <li class="breadcrumb-item"><a href="{{ route('menu.index') }}">Kelola Menu</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Menu</li>
                </ol>
            </nav>
            <h2 class="h4">Edit Menu</h2>
            <p class="mb-0">Ubah informasi data menu {{ $menu->nama_menu }}.</p>
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
        <form action="{{ route('menu.update', $menu->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_menu" class="form-label">Nama Menu</label>
                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ old('nama_menu', $menu->nama_menu) }}" required>
            </div>

            <div class="mb-3">
                <label for="kategori_id" class="form-label">Kategori</label>
                <select class="form-select" id="kategori_id" name="kategori_id" required>
                    <option value="">-- Pilih Kategori --</option>
                    @foreach($kategori as $kat)
                        <option value="{{ $kat->kategori_id }}" {{ (old('kategori_id', $menu->kategori_id) == $kat->kategori_id) ? 'selected' : '' }}>
                            {{ $kat->nama_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga (Rp)</label>
                <input type="number" class="form-control" id="harga" name="harga" value="{{ old('harga', $menu->harga) }}" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi (Opsional)</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ old('deskripsi', $menu->deskripsi) }}</textarea>
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto Menu (Opsional)</label>
                @if($menu->foto)
                    <div class="mb-2">
                        <p class="small text-muted mb-1">Foto saat ini:</p>
                        <img src="{{ asset('storage/' . $menu->foto) }}" alt="{{ $menu->nama_menu }}" width="100" class="img-thumbnail rounded">
                    </div>
                @endif
                <input type="file" class="form-control" id="foto" name="foto">
                <small class="text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
            </div>

            <button type="submit" class="btn btn-gray-800 mt-2">Update Menu</button>
        </form>
    </div>
@endsection
