<!DOCTYPE html>
<html lang="en">
<head>
    {{-- 1. Panggil CSS & Meta --}}
    @include('layouts.guest.css')
</head>
<body>
    <div class="container-xxl bg-white p-0">

        {{-- 2. Panggil Navbar Atas --}}
        @include('layouts.guest.header')

        {{-- 3. Isi Konten Halaman (Home / Contact / Login) --}}
        @yield('content')

        {{-- 4. Panggil Footer Bawah --}}
        @include('layouts.guest.footer')

    </div>

    {{-- 5. Panggil JS --}}
    @include('layouts.guest.js')
</body>
</html>
