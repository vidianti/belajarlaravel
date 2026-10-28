
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Admin Upcube')</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

    {{-- Header --}}
    <nav class="navbar navbar-dark bg-dark px-4">
        <a href="{{ route('admin.dashboard') }}"
           class="navbar-brand">UPCUBE ADMIN</a>
    </nav>

    <div class="container-fluid">
        <div class="row">

            {{-- Sidebar --}}
            <aside class="col-md-2 bg-light min-vh-100 p-3">
                <h5>Menu Admin</h5>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('admin.dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('admin.alert') }}">Sweet Alert</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('admin.calendar') }}">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('admin.forms') }}">Form Elements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('admin.tables') }}">Data Tables</a>
                    </li>
                </ul>
            </aside>

            {{-- Main Content --}}
            <main class="col-md-10 p-4">
                @yield('content')
            </main>

        </div>
    </div>

    {{-- Footer --}}
    <footer class="bg-dark text-white text-center p-3">
        <p class="mb-0">© {{ date('Y') }} Upcube Admin</p>
    </footer>

    {{-- Scripts --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
