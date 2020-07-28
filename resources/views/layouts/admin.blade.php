<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="shortcut icon" href="/public-assets/img/logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin-assets/css/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="/admin-assets/css/datatables-bs4/css/dataTables.bootstrap4.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin-assets/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">ADMIN</span>
                        <div class="dropdown-divider"></div>
                        <a href="/admin" class="dropdown-item">
                            <i class="fas fa-home mr-2"></i>DASHBOARD
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="/logout" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> LOG OUT
                        </a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/admin" class="brand-link">
                <img src="/public-assets/img/logo.png" alt="Instansi Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">BerBIKELah 2020</span>
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
                            <a href="/admin" class="nav-link {{ Request::is('admin') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link {{ Request::is('admin/peserta*') ? 'active' : '' }}">
                                <i class="nav-icon far fa-user"></i>
                                <p>
                                    Peserta
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/admin/peserta/tambah" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tambah Peserta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/peserta" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Daftar Peserta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/peserta/pembayaran" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Pembayaran Peserta</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/admin/peserta/merchant" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Merchant Peserta</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">@yield('title')</h1>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            @yield('content')

        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.0.2
            </div>
        </footer>
    </div>
    <!-- jQuery -->
    <script src="/admin-assets/js/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="/admin-assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/admin-assets/js/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- AdminLTE App -->
    <script src="/admin-assets/js/adminlte.min.js"></script>
    <!-- DataTables -->
    <script src="/admin-assets/js/datatables/jquery.dataTables.js"></script>
    <script src="/admin-assets/js/datatables-bs4/js/dataTables.bootstrap4.js"></script>
    <script src="/admin-assets/js/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    @yield('script')
    @include('vendor.sweetalert.cdn')
    @include('vendor.sweetalert.view')
</body>

</html>
