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
                    <li class="breadcrumb-item active" aria-current="page">Kelola Menu</li>
                </ol>
            </nav>
            <h2 class="h4">Daftar Menu</h2>
            <p class="mb-0">Kelola data makanan dan minuman Restoria.</p>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0">
            <a href="{{ route('menu.create') }}" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
                <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                </svg>
                Tambah Menu
            </a>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="card card-body border-0 shadow table-wrapper table-responsive">
        <table class="table table-hover align-items-center">
            <thead>
                <tr>
                    <th class="border-gray-200">No</th>
                    <th class="border-gray-200">Foto</th>
                    <th class="border-gray-200">Nama Menu</th>
                    <th class="border-gray-200">Kategori</th>
                    <th class="border-gray-200">Harga</th>
                    <th class="border-gray-200">Deskripsi</th>
                    <th class="border-gray-200">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($menu as $item)
                    <tr>
                        <td><span class="fw-bold">{{ $loop->iteration }}</span></td>
                        <td>
                            @if($item->foto)
                                <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama_menu }}" width="60" class="rounded">
                            @else
                                <span class="badge bg-secondary">Tidak ada foto</span>
                            @endif
                        </td>
                        <td><span class="fw-normal">{{ $item->nama_menu }}</span></td>
                        <td><span class="fw-normal">{{ $item->kategori->nama_kategori ?? '-' }}</span></td>
                        <td><span class="fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</span></td>
                        <td style="width: 35%;">{{ $item->deskripsi ?? '-' }}</td>
                        <td>
                            <a href="{{ route('menu.edit', $item->id) }}" class="btn btn-sm btn-info me-1">Edit</a>
                            <form action="{{ route('menu.destroy', $item->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus menu ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4">Belum ada data menu.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection