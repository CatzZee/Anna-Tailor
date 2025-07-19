<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Sidebar Bootstrap</title>
    @yield('config.up')
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flashMessage.css') }}">
    <link rel="stylesheet" href="{{ asset('js/flashMessage.js') }}">
    <!-- Logika CSS -->
    @if (Route::is('dashboard.page'))
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
    @elseif (Route::is('kasir.page'))
    <link rel="stylesheet" href="{{ asset('css/kasir.css') }}">
    @elseif (Route::is('produk.page'))
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
    @elseif (Route::is('pelanggan.page'))
    <link rel="stylesheet" href="{{ asset('css/pelanggan.css') }}">
    @endif
</head>

<body>

    <div class="main-container">
        <!-- Sidebar -->
        <div class="sidebar d-flex flex-column flex-shrink-0 p-3" id="sidebar">
            <!-- Header Sidebar -->
            <a href="/"
                class="sidebar-header d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <i class="bi bi-bootstrap-fill me-2 fs-4"></i>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>

            <!-- Navigasi Utama -->
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link" aria-current="page">
                        <i class="bi bi-house-door"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard.page') }}"
                        class="nav-link  {{ Route::is('dashboard.page') ? 'active link-dark' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('kasir.page') }}" class="nav-link {{ Route::is('kasir.page')? 'active link-dark' : '' }}">
                        <i class="bi bi-table"></i>
                        <span>Kasir</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('produk.page') }}" class="nav-link {{ Route::is('produk.page')? 'active link-dark' : '' }}">
                        <i class="bi bi-grid"></i>
                        <span>Produk</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pelanggan.page') }}" class="nav-link {{ Route::is('pelanggan.page')? 'active link-dark' : '' }}">
                        <i class="bi bi-person-circle"></i>
                        <span>Customers</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('cart.page') }}" class="nav-link {{ Route::is('cart.page')? 'active link-dark' : '' }}">
                        <i class="bi bi-cart"></i>
                        <span>Cart</span>
                    </a>
                </li>
            </ul>
            <hr>

            <!-- Footer Sidebar (Dropdown User) -->
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center link-dark text-decoration-none dropdown-toggle"
                    id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://placehold.co/32x32/0d6efd/ffffff?text=U" alt="" width="32"
                        height="32" class="rounded-circle me-2">
                    <span><strong>User</strong></span>
                </a>
                <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>

            <!-- Tombol untuk minimize/expand sidebar -->
            <button class="btn btn-primary rounded-circle p-0" id="sidebar-toggle" title="Toggle Sidebar">
                <i class="bi bi-chevron-left"></i>
            </button>
        </div>

        <!-- Konten Utama -->
        <main class="main-content">
            @yield('content')
        </main>
    </div>
    @yield('config.down')
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JS Kustom untuk Toggle Sidebar -->
    <script src="{{ asset('js/sidebar.js') }}"></script>

</body>

</html>
