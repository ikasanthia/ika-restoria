<div class="container-xxl position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-2">
        <a href="{{ url('/') }}" class="navbar-brand p-0 d-flex align-items-center">
            <img src="{{ asset('assets-guest/img/logo-restoria-fix.png') }}" alt="Logo Restoria" class="me-2" style="max-height: 40px;">
            <h1 class="text-primary m-0 fs-3"><i class="fa fa-utensils me-2"></i>Restoria</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0 pe-3 align-items-center">
                <a href="{{ url('/') }}#home" class="nav-item nav-link active">Home</a>
                <a href="{{ url('/') }}#about" class="nav-item nav-link text-nowrap">Tentang Kami</a>
                <a href="{{ url('/') }}#service" class="nav-item nav-link">Layanan</a>
                <a href="{{ url('/') }}#menu" class="nav-item nav-link">Menu</a>
                <a href="{{ url('/contact') }}" class="nav-item nav-link">Kontak</a>
            </div>
            <div class="d-flex align-items-center gap-2">
                <a href="{{ url('/') }}#booking" class="btn btn-primary btn-sm px-3 py-2 text-nowrap" style="font-size: 13px; font-weight: 600;">Book A Table</a>
              @guest
    <a href="{{ route('login') }}" class="btn btn-sm btn-warning text-dark px-3 py-2 text-nowrap" style="font-size: 13px; font-weight: 600;">Login / Register</a>
@else
    <div class="dropdown text-nowrap">
        <a href="#" class="btn btn-sm btn-warning text-dark dropdown-toggle px-3 py-2 d-flex align-items-center gap-1" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 13px; font-weight: 600;">
            <span>{{ Auth::user()->name }}</span>
            <small class="fw-normal">({{ ucfirst(Auth::user()->role) }})</small>
        </a>
        <ul class="dropdown-menu dropdown-menu-end mt-2">
            <li>
                <span class="dropdown-item-text small text-muted">
                    Role: <strong>{{ ucfirst(Auth::user()->role) }}</strong>
                </span>
            </li>
            @if (session('last_login'))
                <li>
                    <span class="dropdown-item-text small text-muted">
                        Login: {{ session('last_login') }}
                    </span>
                </li>
            @endif
            <li><hr class="dropdown-divider my-1"></li>
            <li>
                <form method="POST" action="{{ route('logout') }}" class="m-0">
                    @csrf
                    <button type="submit" class="dropdown-item text-danger d-flex align-items-center">
                        Keluar
                    </button>
                </form>
            </li>
        </ul>
    </div>
@endguest
            </div>
        </div>
    </nav>
</div>