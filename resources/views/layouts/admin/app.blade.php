<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Restoria - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- start css --}}
    @include('layouts.admin.css')
    {{-- end css --}}

    <!-- Google Fonts: Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom Theme: Warm Coffee & Espresso (Restoria) -->
    <style>
        /* 1. Body & Font */
        body {
            font-family: 'Poppins', sans-serif !important;
            background-color: #f8f6f4 !important; /* Krem lembut kafe */
        }

        /* 2. Custom Sidebar Cokelat Kopi Klasik */
        #sidebarMenu, .sidebar {
            background: linear-gradient(180deg, #3d2b1f 0%, #241911 100%) !important;
        }
        .sidebar .nav-link {
            color: #d4c5bd !important;
        }

        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: rgba(212, 197, 189, 0.15) !important;
            color: #ffffff !important;
        }

        /* 3. Custom Tombol Utama (Espresso Brown) */
        .btn-gray-800, .btn-primary {
            background-color: #5c4033 !important;
            border-color: #5c4033 !important;
            color: #ffffff !important;
        }

        .btn-gray-800:hover, .btn-primary:hover {
            background-color: #432e25 !important;
            border-color: #432e25 !important;
        }

        /* 4. Custom Card & Header Tabel */
        .card {
            border-radius: 12px !important;
            border: 1px solid #efebe9 !important;
        }

        .table thead th {
            background-color: #fcfbfa !important;
            color: #5c4033 !important;
            border-bottom: 2px solid #d7ccc8 !important;
        }
    </style>
</head>

<body>

    {{-- start sidebar --}}
    @include('layouts.admin.sidebar')
    {{-- end sidebar --}}

    <!-- Main Content -->
    <main class="content">

        {{-- start header --}}
        @include('layouts.admin.header')
        {{-- end header --}}

        {{-- start main content --}}
        @yield('content')
        {{-- end main content --}}

        {{-- start footer --}}
        @include('layouts.admin.footer')
        {{-- end footer --}}

    </main>

    {{-- start js --}}
    @include('layouts.admin.js')
    {{-- end js --}}

</body>

</html>
