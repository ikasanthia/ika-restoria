@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <h2>Edit Data Meja</h2>
    <form action="{{ route('tables.update', $table->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Nomor / Nama Meja</label>
            <input type="text" name="table_number" value="{{ $table->table_number }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Kapasitas (Jumlah Orang)</label>
            <input type="number" name="capacity" value="{{ $table->capacity }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Lokasi</label>
            <input type="text" name="location" value="{{ $table->location }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data Meja</button>
        <a href="{{ route('tables.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
