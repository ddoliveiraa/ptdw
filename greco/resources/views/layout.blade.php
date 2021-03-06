<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GRECO</title>
    <link rel="shortcut icon" href="{{ public_path() }}/dist/img/UALogo.png" type="image/x-icon">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/adminlte.min.css">
    <!-- CSS do Grupo -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/custom.css">

    @yield('stylesheets')
</head>

<style>
    div.ex1 {
        max-height: 60vh;
        overflow: scroll;
        overflow-x: hidden; //horizontal
    }

</style>


<body class="hold-transition sidebar-mini">
    <a href="#content" class="sr-only sr-only-focusable">Skip to main content</a>

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
                    <a href="{{ public_path() }}/" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        @php $total = \App\Models\Notification::count();
                        $tipos = \App\Models\Notification::select('tipo')->distinct()->get();
                        $notifs = \App\Models\Notification::all();
                        @endphp
                        <span class="badge badge-warning navbar-badge">{{ $total }} </span>
                    </a>
                    @if ($total > 0)
                        <div class="ex1 dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            @foreach ($tipos as $tipo)
                                <span class="dropdown-item dropdown-header">
                                    {{ \App\Models\Notification::where('tipo', 'ilike', $tipo->tipo)->count() }} Alertas
                                    de
                                    {{ $tipo->tipo }}</span>
                            @endforeach
                            @foreach ($notifs as $notif)
                                <div class="dropdown-divider"></div>
                                <p class="dropdown-item">
                                    <a href="{{ public_path() }}/ficha/{{ $notif->id_produto }}"><i class="fas fa-exclamation mr-2"></i>
                                        <strong>{{ $notif->tipo }}</strong>
                                        {{ $notif->texto }}
                                    </a>
                                </p>
                            @endforeach

                            <div class="dropdown-divider"></div>
                        </div>
                    @else
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                            <span class="dropdown-item dropdown-header">Não existem Alertas</span>
                            <div class="dropdown-divider"></div>
                        </div>
                    @endif


                </li>

                {{-- Language Changer --}}
                @php $locale = session()->get('locale'); @endphp
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @switch($locale)
                            @case('pt')
                            PT
                            @break
                            @case('en')
                            EN
                            @break
                            @default
                            PT
                        @endswitch
                    </a>
                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ public_path() }}/welcome/pt">Português</a>
                        <a class="dropdown-item" href="{{ public_path() }}/welcome/en">English</a>
                    </div>
                </li>

                {{-- User Menu --}}
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{ public_path() }}/dist/img/user2-160x160.jpg"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">Fernando Silva</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{ public_path() }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                                alt="User Image">

                            <p>
                                Fernando Silva
                                <small>{{ __('lang.supervisor sectorial') }}</small>
                            </p>
                        </li>
                        <!-- Menu Body -->
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" role="button" class="btn btn-block btn-default">{{ __('lang.sair') }}</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary navbar-grad elevation-4">
            <!-- Brand Logo -->
            <a href="{{ public_path() }}/" class="brand-link navbar-dark">
                <img src="{{ public_path() }}/dist/img/UALogo.png" alt="UA Logo" class="brand-image  elevation-3"
                    style="opacity: .8">
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
                            <a href="{{ public_path() }}/produtos"
                                class="nav-link {{ Request::is('produtos') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-flask"></i>
                                <p>
                                    {{ __('lang.produtos') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('movimentos/*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link {{ Request::is('movimentos/*') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    {{ __('lang.movimentos') }}
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ public_path() }}/movimentos/entrada"
                                        class="nav-link {{ Request::is('movimentos/entrada') ? 'active' : '' }}">
                                        <i class="far fa-arrow-alt-circle-right nav-icon"></i>
                                        <p>{{ __('lang.registar entrada') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ public_path() }}/movimentos/saida"
                                        class="nav-link {{ Request::is('movimentos/saida') ? 'active' : '' }}">
                                        <i class="far fa-arrow-alt-circle-left nav-icon"></i>
                                        <p>{{ __('lang.registar saida') }}</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ public_path() }}/movimentos/historico"
                                        class="nav-link {{ Request::is('movimentos/historico') ? 'active' : '' }}">
                                        <i class="far fa-clock nav-icon"></i>
                                        <p>{{ __('lang.historico') }}</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ public_path() }}/clientes"
                                class="nav-link {{ Request::is('clientes') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    {{ __('lang.clientes') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ public_path() }}/operadores"
                                class="nav-link {{ Request::is('operadores') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-shield-alt"></i>
                                <p>
                                    {{ __('lang.operadores') }}
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ public_path() }}/fornecedores"
                                class="nav-link {{ Request::is('fornecedores') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-truck"></i>
                                <p>
                                    {{ __('lang.fornecedores') }}
                                </p>
                            </a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="/armazem" class="nav-link {{ Request::is('armazem') ? 'active' : '' }}">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    {{ __('lang.armazem') }}
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" id="content" tabindex="-1">
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
    <script src="{{ public_path() }}/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ public_path() }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ public_path() }}/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ public_path() }}/dist/js/demo.js"></script>

    @yield('scripts')

</body>

</html>
