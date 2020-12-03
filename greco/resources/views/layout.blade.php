<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GRECO</title>
    <link rel="shortcut icon" href="../../dist/img/UALogo.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- flag-icon-css -->
    <link rel="stylesheet" href="../../plugins/flag-icon-css/css/flag-icon.min.css">
    <!-- CSS do Grupo -->
    <link rel="stylesheet" href="../../dist/css/custom.css">

    @yield('stylesheets')
</head>




<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>

                {{-- Language Changer --}}
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        PT
                    </a>
                    <div class="dropdown-menu dropdown-menu-right p-0" style="min-width: 0">
                        <a href="#" class="dropdown-item active">
                            PT
                        </a>
                        <a href="#" class="dropdown-item">
                            EN
                        </a>
                    </div>
                </li>

                {{-- User Menu --}}
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="../../dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">Fernando Silva</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">

                            <p>
                                Fernando Silva
                                <small>Fiel de Armazém</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-right">Log out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary navbar-grad elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link navbar-dark">
                <img src="../../dist/img/UALogo.png" alt="UA Logo" class="brand-image  elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">GRECO</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- SidebarSearch Form -->
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="/produtos" class="nav-link {{ Request::is('produtos') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-flask"></i>
                                <p>
                                    Produtos
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('movimentos/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('movimentos/*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Movimentos
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="/movimentos/entrada"
                                        class="nav-link {{ Request::is('movimentos/entrada') ? 'active' : '' }}">
                                        <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                                        <p>Registrar Entrada</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/movimentos/saida"
                                        class="nav-link {{ Request::is('movimentos/saida') ? 'active' : '' }}">
                                        <i class="far fa-arrow-alt-circle-left nav-icon"></i>
                                        <p>Registrar Saida</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/movimentos/historico"
                                        class="nav-link {{ Request::is('movimentos/historico') ? 'active' : '' }}">
                                        <i class="far fa-clock nav-icon"></i>
                                        <p>Histórico</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="/clientes" class="nav-link {{ Request::is('clientes') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Clientes
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/operadores" class="nav-link {{ Request::is('operadores') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    Operadores
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/operadores" class="nav-link {{ Request::is('operadores') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>
                                    Fornecedores
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/armazem" class="nav-link {{ Request::is('armazem') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    Armazém
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                
            </div>
            <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights
            reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>

    @yield('scripts')

</body>

</html>
