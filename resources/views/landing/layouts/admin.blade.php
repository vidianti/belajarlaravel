<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Admin Dashboard') - SnackedAdmin</title>

    <!-- CSS Template -->
    <link href="{{ asset('snacked/assets/css/bootstrap.min.css') }}"
          rel="stylesheet">

    <link href="{{ asset('snacked/assets/css/bootstrap-extended.css') }}"
          rel="stylesheet">

    <link href="{{ asset('snacked/assets/css/app.css') }}"
          rel="stylesheet">

    <link href="{{ asset('snacked/assets/css/icons.css') }}"
          rel="stylesheet">
</head>

<body>
    <div class="wrapper">

        <!-- Sidebar -->
       @include('landing.layouts.sidebar')

        <!-- Header -->
        <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-icon fs-3">
                    <i class="bi bi-list"></i>
                </div>

                <div class="top-menu ms-auto">
                    <span class="fw-bold">Admin</span>
                </div>
            </nav>
        </header>

        <!-- Konten Halaman -->
        <main class="page-wrapper">
            <div class="page-content">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="page-footer">
            <p class="mb-0">
                © {{ date('Y') }} SnackedAdmin. All rights reserved.
            </p>
        </footer>

    </div>

    <!-- JavaScript Template -->
    <script src="{{ asset('snacked/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('snacked/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('snacked/assets/js/app.js') }}"></script>
</body>
</html>
