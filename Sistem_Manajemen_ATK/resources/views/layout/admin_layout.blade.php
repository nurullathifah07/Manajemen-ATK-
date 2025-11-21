<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard ATK - BPS Kab. Banjar</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .sidebar {
            width: 245px;
            min-height: 100vh;
        }
        .sidebar .nav-link.active {
            background: rgba(255,255,255,0.2);
            border-radius: 6px;
        }
    </style>
</head>

<body class="bg-light">

<div class="d-flex">

    <!-- SIDEBAR -->
    <div class="bg-secondary text-white sidebar p-3">
        <h4 class="text-center mb-4">ATK BPS Banjar</h4>

        <ul class="nav flex-column">

            <li class="nav-item mb-2">
                <a href="/admin/beranda"
                class="nav-link text-white {{ request()->is('admin/beranda') ? 'active' : '' }}">
                <i class="bi bi-speedometer2 me-2"></i> Dashboard
                 </a>
            </li>

            <li class="nav-item mb-2">
                <a href="/admin/akun"
                class="nav-link text-white {{ request()->is('admin/akun') ? 'active' : '' }}">
                    <i class="bi bi-grid me-2"></i> Akun
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#"
                class="nav-link text-white {{ request()->is('admin/barang') ? 'active' : '' }}">
                    <i class="bi bi-box-seam me-2"></i> Stok Barang
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-cart-plus me-2"></i> Barang Masuk
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-file-earmark-minus me-2"></i> Barang Keluar
                </a>
            </li>

            <li class="nav-item mb-2">
                <a href="#" class="nav-link text-white">
                    <i class="bi bi-clock-history me-2"></i> Riwayat Pengambilan
                </a>
            </li>

        </ul>
    </div>

    <!-- CONTENT -->
    <div class="flex-grow-1">

        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg bg-white shadow-sm px-4">
            <form class="d-flex me-auto" style="width: 300px;">
                <span class="input-group-text bg-white">
                    <i class="bi bi-search"></i>
                </span>
                <input class="form-control" type="search" placeholder="Cari..." aria-label="Search">
            </form>

            <ul class="navbar-nav ms-auto align-items-center">

                <li class="nav-item me-3">
                    <a class="nav-link position-relative" href="#">
                        <i class="bi bi-bell fs-5"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge bg-danger">2</span>
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">
                        <img src="https://via.placeholder.com/40" class="rounded-circle me-2">
                        Admin
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Pengaturan</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Logout</a></li>
                    </ul>
                </li>

            </ul>
        </nav>

        <div class="p-4">
            @yield('content')
        </div>
        <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
         <!-- End of Footer -->
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

@yield('chart')

</body>

</html>
