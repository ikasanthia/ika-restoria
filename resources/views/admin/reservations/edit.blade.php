@extends('layouts.admin.app')

@section('content')
<div class="container py-4">
    <h2>Edit Data Reservasi</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Nama Tamu</label>
            <input type="text" name="name" class="form-control" value="{{ $reservation->name }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $reservation->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Pilih Meja</label>
            <select name="table_id" class="form-select" required>
                <option value="">-- Pilih Meja --</option>
                @foreach($tables as $table)
                    <option value="{{ $table->id }}" {{ $reservation->table_id == $table->id ? 'selected' : '' }}>
                        {{ $table->table_number }} (Kapasitas: {{ $table->capacity }} Orang - {{ $table->location }})
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Tanggal & Waktu Reservasi</label>
            <input type="datetime-local" name="reservation_date" class="form-control" value="{{ date('Y-m-d\TH:i', strtotime($reservation->reservation_date)) }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Jumlah Tamu</label>
            <input type="number" name="guests_count" class="form-control" value="{{ $reservation->guests_count }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Catatan Khusus (Optional)</label>
            <textarea name="special_requests" class="form-control" rows="3">{{ $reservation->special_requests }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Reservasi</button>
        <a href="{{ route('reservations.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
