<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Restoria - Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- start css --}}
    @include('layouts.admin.css')
    {{-- end css --}}
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