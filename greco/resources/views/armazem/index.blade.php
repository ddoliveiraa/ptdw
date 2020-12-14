@extends('layout')

@section('stylesheets')
    <style>

    </style>

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.armazem') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.armazem') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Laboratório A24</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('lang.localizacoes') }}</h3>
                                </div>
                                <div class="card-body">
                                    <nav id="nav-local">
                                        <ul class="fa-ul" id="local">
                                            <li><a data-toggle="collapse" href="#lab"><span class="fa-li"><i
                                                            class="fas fa-warehouse"></i></span>Lab
                                                    A24</a></li>
                                            <ul id="lab" class="collapse show" data-parent="#local" class="fa-ul">
                                                <li><a data-toggle="collapse" href="#frigo">Frigorífico</a>
                                                </li>
                                                <ul id="frigo" class="collapse show" data-parent="#lab" class="fa-ul">
                                                    <li><a href="#"></i></span>Prateleira 1</a>
                                                    </li>
                                                    <li><a href="#"></i></span>Prateleira 2</a>
                                                    </li>
                                                    <li><a href="#"></i></span>Gaveta
                                                            1</a></li>
                                                </ul>
                                            </ul>
                                            <ul id="lab" class="collapse show" data-parent="#local" class="fa-ul">
                                                <li><a data-toggle="collapse" href="#arma">Armário</a>
                                                </li>
                                                <ul id="arma" class="collapse show" data-parent="#lab" class="fa-ul">
                                                    <li><a href="#"></i></span>Prateleira 1</a>
                                                    </li>
                                                    <li><a href="#"></i></span>Prateleira 2</a>
                                                    </li>
                                                    <li><a href="#"></i></span>Gaveta
                                                            1</a></li>
                                                </ul>
                                            </ul>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('lang.produtos') }}</h3>
                                </div>
                                <div class="card-body">
                                    <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                    <div id="accordion">
                                        <div class="card-secondary">
                                            <div class="card-header">
                                                <h3 class="card-title w-100">
                                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                        {{ __('lang.produtos-quimicos') }}
                                                    </a>
                                                </h3>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                    <table id="prod-quimico" class="table table-bordered table-striped">
                                                        <thead class="bg-dark">
                                                            <tr>
                                                                <th>{{ __('lang.produto') }}</th>
                                                                <th>{{ __('lang.n de ordem') }}</th>
                                                                <th>{{ __('lang.capacidade') }}</th>
                                                                <th>{{ __('lang.data de abertura') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Cloreto de Sódio</td>
                                                                <td>10</td>
                                                                <td>500ml</td>
                                                                <td>02/12/2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cloreto de Sódio</td>
                                                                <td>11</td>
                                                                <td>500ml</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cloreto de Sódio</td>
                                                                <td>12</td>
                                                                <td>250ml</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Cloreto de Sódio</td>
                                                                <td>13</td>
                                                                <td>500ml</td>
                                                                <td>01/11/2020</td>
                                                            </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="card-secondary">
                                            <div class="card-header">
                                                <h3 class="card-title w-100">
                                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                                        {{ __('lang.produtos-n-quimicos') }}
                                                    </a>

                                                </h3>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                                    <table id="prod-n-quimico" class="table table-bordered table-striped">
                                                        <thead class="bg-dark">
                                                            <tr>
                                                                <th>{{ __('lang.produto') }}</th>
                                                                <th>{{ __('lang.n de ordem') }}</th>
                                                                <th>{{ __('lang.capacidade') }}</th>
                                                                <th>{{ __('lang.data de abertura') }}</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Luvas</td>
                                                                <td>10</td>
                                                                <td>10 unidades</td>
                                                                <td>02/12/2020</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Caixa de Petri</td>
                                                                <td>11</td>
                                                                <td>500ml</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Pipeta</td>
                                                                <td>12</td>
                                                                <td>250ml</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Óculos</td>
                                                                <td>13</td>
                                                                <td>5 unidades</td>
                                                                <td>01/11/2020</td>
                                                            </tr>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../../plugins/moment/locale/pt.js"></script>
    <script src="../../plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

    </script>

@endsection
