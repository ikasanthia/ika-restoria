<!-- Mobile Nav -->
<nav class="navbar navbar-dark navbar-theme-primary px-4 col-12 d-lg-none">
    <a class="navbar-brand me-lg-5" href="{{ route('dashboard') }}">
        <img class="navbar-brand-dark" src="{{ asset('assets-admin/img/brand/light.svg') }}" alt="Volt logo" />
    </a>
    <div class="d-flex align-items-center">
        <button class="navbar-toggler d-lg-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<!-- Sidebar Menu -->
<nav id="sidebarMenu" class="sidebar d-lg-block bg-gray-800 text-white collapse" data-simplebar>
    <div class="sidebar-inner px-4 pt-3">
        <ul class="nav flex-column pt-3 pt-md-0">
            <!-- Brand / Logo -->
            <li class="nav-item">
                <a href="{{ route('dashboard') }}" class="nav-link d-flex align-items-center">
                    <span class="sidebar-icon">
                        <img src="{{ asset('assets-admin/img/logo-restoria-fix.png') }}"  style="width: 42px; height: 42px; object-fit: contain; margin-right: 12px;">
                    </span>
                    <span class="mt-1 ms-1 sidebar-text">Restoria - Cafe & Resto</span>
                </a>
            </li>

            <!-- Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Dashboard</span>
                </a>
            </li>

            <!-- Kelola Menu -->
            <li class="nav-item {{ request()->routeIs('menu.*') ? 'active' : '' }}">
                <a href="{{ Route::has('menu.index') ? route('menu.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 4a1 1 0 00-2 0v14a1 1 0 002 0V4zM11 4a1 1 0 10-2 0v14a1 1 0 102 0V4zM17 4a1 1 0 10-2 0v14a1 1 0 102 0V4z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Menu</span>
                </a>
            </li>

            <!-- Kelola Kategori -->
            <li class="nav-item {{ request()->routeIs('kategori.*') ? 'active' : '' }}">
                <a href="{{ route('kategori.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Kategori</span>
                </a>
            </li>

            <!-- Kelola Pesanan -->
            <li class="nav-item {{ request()->routeIs('pesanan.*') ? 'active' : '' }}">
                <a href="{{ Route::has('pesanan.index') ? route('pesanan.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 100-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Pesanan</span>
                </a>
            </li>

            <!-- Kelola Reservasi -->
            <li class="nav-item {{ request()->routeIs('reservasi.*') ? 'active' : '' }}">
                <a href="{{ Route::has('reservasi.index') ? route('reservasi.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Reservasi</span>
                </a>
            </li>

            <!-- Kelola Pelanggan -->
            <li class="nav-item {{ request()->routeIs('pelanggan.*') ? 'active' : '' }}">
                <a href="{{ Route::has('pelanggan.index') ? route('pelanggan.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Pelanggan</span>
                </a>
            </li>

            <!-- Menu Kelola User -->
            <li class="nav-item {{ Request::is('user*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola User</span>
                </a>
            </li>
            <!-- Kelola Banner -->
            <li class="nav-item {{ request()->routeIs('banners.*') ? 'active' : '' }}">
                <a href="{{ Route::has('banners.index') ? route('banners.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Banner</span>
                </a>
            </li>

            <!-- Kelola Galeri -->
            <li class="nav-item {{ request()->routeIs('galeri.*') ? 'active' : '' }}">
                <a href="{{ Route::has('galeri.index') ? route('galeri.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm0 2h10v7l-2-2a1 1 0 00-1.414 0L9.586 12l-1.293-1.293a1 1 0 00-1.414 0L5 12.586V5z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Kelola Galeri</span>
                </a>
            </li>

            <!-- Riwayat Pesanan -->
            <li class="nav-item {{ request()->routeIs('riwayat.*') ? 'active' : '' }}">
                <a href="{{ Route::has('riwayat.index') ? route('riwayat.index') : '#' }}" class="nav-link">
                    <span class="sidebar-icon">
                        <svg class="icon icon-xs me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"></path>
                        </svg>
                    </span>
                    <span class="sidebar-text">Riwayat Pesanan</span>
                </a>
            </li>

        </ul>
    </div>
</nav>