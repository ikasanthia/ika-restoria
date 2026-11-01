@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <h2>Tambah Meja Baru</h2>
    <form action="{{ route('tables.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nomor / Nama Meja</label>
            <input type="text" name="table_number" class="form-control" required placeholder="Contoh: Meja VIP 01">
        </div>
        <div class="mb-3">
            <label class="form-label">Kapasitas (Jumlah Orang)</label>
            <input type="number" name="capacity" class="form-control" required placeholder="Contoh: 4">
        </div>
        <div class="mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="location" class="form-control" required placeholder="Contoh: Indoor / Outdoor / VIP">
        </div>
        <button type="submit" class="btn btn-success">Simpan Data Meja</button>
        <a href="{{ route('tables.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
