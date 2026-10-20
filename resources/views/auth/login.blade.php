@extends('layouts.guest.app')

@section('content')
<div class="row justify-content-center py-4">
    <div class="col-md-5 col-lg-4">
        <div class="card border-0 shadow-sm rounded-4 p-3">
            <div class="card-body">
                <h3 class="card-title text-center fw-bold mb-4 text-dark">Login Restoria</h3>

                {{-- Alert Error jika Login Gagal --}}
                @if(session('error'))
                    <div class="alert alert-danger alert-dismissible fade show small mb-3" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="{{ url('/auth') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label fw-semibold">Username</label>
                        <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Masukkan username" required>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label fw-semibold">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Masukkan password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 fw-bold py-2">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
