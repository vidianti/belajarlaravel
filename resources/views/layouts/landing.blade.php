
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Restoran Kita')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        :root {
            --primary: #fea116;
            --dark: #0f172b;
        }

        body {
            font-family: Arial, sans-serif;
            color: #555;
        }

        .navbar-brand {
            color: var(--primary) !important;
            font-weight: 800;
            font-size: 28px;
        }

        .navbar {
            background: var(--dark);
        }

        .navbar .nav-link {
            color: white;
            font-weight: 600;
            padding: 18px 12px;
        }

        .navbar .nav-link:hover,
        .navbar .nav-link.active {
            color: var(--primary);
        }

        .btn-primary {
            background: var(--primary);
            border-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background: #e88d00;
            border-color: #e88d00;
        }

        .hero {
            background: linear-gradient(90deg, rgba(15,23,43,.95), rgba(15,23,43,.5)),
                url('https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1800&q=85') center/cover;
            color: white;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: clamp(2.5rem, 5vw, 4.5rem);
            font-weight: 800;
        }

        .section-title {
            color: var(--primary);
            font-weight: 700;
        }

        .food-image {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }

        .team-image {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .footer {
            background: var(--dark);
            color: white;
        }

        .footer a {
            color: #ddd;
            text-decoration: none;
        }

        .footer a:hover {
            color: var(--primary);
        }
    </style>

    @stack('styles')
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
    <div class="container">
        <a class="navbar-brand" href="{{ route('landing.home') }}">
            <i class="bi bi-cup-hot-fill"></i> RestoranKita
        </a>

        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#navMenu"
                aria-controls="navMenu" aria-expanded="false"
                aria-label="Buka navigasi">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navMenu">
            <div class="navbar-nav ms-auto">
                <a class="nav-link {{ request()->routeIs('landing.home') ? 'active' : '' }}"
                   href="{{ route('landing.home') }}">Home</a>

                <a class="nav-link {{ request()->routeIs('landing.about') ? 'active' : '' }}"
                   href="{{ route('landing.about') }}">About</a>

                <a class="nav-link {{ request()->routeIs('landing.services') ? 'active' : '' }}"
                   href="{{ route('landing.services') }}">Service</a>

                <a class="nav-link {{ request()->routeIs('landing.menu') ? 'active' : '' }}"
                   href="{{ route('landing.menu') }}">Menu</a>

                <a class="nav-link {{ request()->routeIs('landing.team') ? 'active' : '' }}"
                   href="{{ route('landing.team') }}">Team</a>
            </div>

            <a href="{{ route('landing.booking') }}" class="btn btn-primary ms-lg-3">
                Pesan Meja
            </a>
        </div>
    </div>
</nav>

<main>
    @yield('content')
</main>

<footer class="footer mt-5 py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <h4 class="text-warning">RestoranKita</h4>
                <p>Nikmati hidangan lezat dan pengalaman makan terbaik bersama kami.</p>
            </div>

            <div class="col-md-4">
                <h5>Menu Navigasi</h5>
                <p><a href="{{ route('landing.home') }}">Home</a></p>
                <p><a href="{{ route('landing.menu') }}">Menu Makanan</a></p>
                <p><a href="{{ route('landing.booking') }}">Reservasi</a></p>
            </div>

            <div class="col-md-4">
                <h5>Kontak</h5>
                <p><i class="bi bi-geo-alt"></i> Alamat Restoran</p>
                <p><i class="bi bi-telephone"></i> 08xxxxxxxxxx</p>
                <p><i class="bi bi-envelope"></i> info@restorankita.com</p>
            </div>
        </div>

        <hr>
        <p class="text-center mb-0">
            &copy; {{ date('Y') }} RestoranKita. All Rights Reserved.
        </p>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')

</body>
</html>
