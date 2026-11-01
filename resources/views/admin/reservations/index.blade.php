@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2>Kelola Reservasi </h2>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- DI-WRAP DI SINI SUPAYA ADA SLIDE / GESERAN HORIZONTAL --}}
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Tamu</th>
                    <th>Email</th>
                    <th>Meja</th>
                    <th>Tanggal Reservasi</th>
                    <th>Jumlah Tamu</th>
                    <th>Catatan Khusus</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($reservations as $index => $res)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $res->name }}</td>
                        <td>{{ $res->email }}</td>
                        <td>
                            {{ $res->table->table_number ?? 'Meja ID: ' . $res->table_id }}
                        </td>
                        <td>{{ $res->reservation_date }}</td>
                        <td>{{ $res->guests_count }} Orang</td>
                        <td>{{ $res->special_requests ?? '-' }}</td>
                        <td>
                            <div class="d-flex gap-1">
                                {{-- Tombol Edit --}}
                                <a href="{{ route('reservations.edit', $res->id) }}" class="btn btn-warning btn-sm">Edit</a>

                                {{-- Form Hapus --}}
                                <form action="{{ route('reservations.destroy', $res->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data reservasi ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="8" class="text-center">Belum ada data reservasi masuk.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
