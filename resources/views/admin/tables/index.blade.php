@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Kelola Meja</h2>
        <a href="{{ route('tables.create') }}" class="btn btn-primary">+ Tambah Meja</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nomor / Nama Meja</th>
                <th>Kapasitas</th>
                <th>Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($tables as $index => $table)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $table->table_number }}</td>
                    <td>{{ $table->capacity }} Orang</td>
                    <td><span class="badge bg-info">{{ $table->location }}</span></td>
                    <td>
                        <a href="{{ route('tables.edit', $table->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('tables.destroy', $table->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus meja ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Belum ada data meja.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
