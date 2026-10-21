
<!-- Sidebar -->
<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('snacked/assets/images/logo-icon.png') }}"
                 class="logo-icon" alt="Logo">
        </div>

        <div>
            <h4 class="logo-text">SnackedAdmin</h4>
        </div>

        <div class="toggle-icon ms-auto">
            <i class="bi bi-list"></i>
        </div>
    </div>

    <ul class="metismenu" id="menu">
        <li class="menu-label">Menu Utama</li>

        <li>
            <a href="{{ url('/admin') }}">
                <div class="parent-icon">
                    <i class="bi bi-house-door"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/admin/produk') }}">
                <div class="parent-icon">
                    <i class="bi bi-box-seam"></i>
                </div>
                <div class="menu-title">Produk</div>
            </a>
        </li>

        <li>
            <a href="{{ url('/admin/chart') }}">
                <div class="parent-icon">
                    <i class="bi bi-bar-chart"></i>
                </div>
                <div class="menu-title">Chart</div>
            </a>
        </li>
    </ul>
</aside>
<!-- End Sidebar -->
