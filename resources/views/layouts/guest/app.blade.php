<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoria - Cafe & Resto</title>

    {{-- Memanggil Partial CSS --}}
    @include('layouts.guest.css')
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    {{-- Memanggil Partial Header / Navbar --}}
    @include('layouts.guest.header')

    {{-- Konten Utama Dinamis --}}
    <main class="container py-5 flex-grow-1">
        @yield('content')
    </main>

    {{-- Memanggil Partial Footer --}}
    @include('layouts.guest.footer')

    {{-- Memanggil Partial JS --}}
    @include('layouts.guest.js')
</body>
</html>
