<link rel="stylesheet" href="{{ asset('css/adminite.css') }}">
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<link rel="stylesheet" href="https://adminlte.io/themes/v3/plugins/fontawesome-free/webfonts/fa-solid-900.woff2">

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/dashboard" class="brand-link">
        <img src="https://www.riskanaliz.com.tr/wp-content/uploads/2025/04/risk-.png" alt="" >
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ route('admin.applications.check') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Çek Analizi Başvuruları
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>

                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.applications.credit') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Kredi Analizi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.applications.risk') }}" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Risk Değerlendirme
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <form action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                        <button class="nav-link"><i class="bi bi-box-arrow-right me-2"></i> Çıkış
                            Yap</button>
                    </form>

                </li>


            



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

 <!-- Content -->
    <div class="content-wrapper" style="min-height: 1431.84px;">

    <main class="content">
      <div class="container-fluid">
        @yield('content')
      </div>
    </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    