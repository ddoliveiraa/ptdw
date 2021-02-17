@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.operadores') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.operadores') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs" id="OperadoresTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="operador-tab" data-toggle="tab" href="#operador" role="tab"
                                aria-controls="operador" aria-selected="true">{{ __('lang.operadores') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="historico-tab" data-toggle="tab" href="#historico" role="tab"
                                aria-controls="historico" aria-selected="false"> {{ __('lang.historico') }}</a>
                        </li>
                        <li class="nav-item ml-auto col-2">
                            <a role="button" href="{{ public_path() }}/operadores/add"
                                class="btn btn-block btn-secondary ">{{ __('lang.adicionar') }}</a>
                        </li>
                    </ul>
                    <!-- tab-content -->
                    <div class="tab-content" id="OperadorTabs">
                        <div class="tab-pane fade show active" id="operador" role="tabpanel" aria-labelledby="operador-tab">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="operadores_index" class="table table-bordered table-striped">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th>{{ __('lang.nome') }}</th>
                                                <th>{{ __('lang.email') }}</th>
                                                <th>{{ __('lang.perfil') }}</th>
                                                <th>{{ __('lang.data-criacao') }}</th>
                                                <th>{{ __('lang.data-desativ') }}</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <div class="tab-pane fade" id="historico" role="tabpanel" aria-labelledby="historico-tab">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="operadores_historico" class="table table-bordered table-striped">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th>{{ __('lang.operador') }}</th>
                                                <th>{{ __('lang.perfil') }}</th>
                                                <th>{{ __('lang.operacao') }}</th>
                                                <th>{{ __('lang.data') }}</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection

@section('scripts')

    <script src="{{ public_path() }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ public_path() }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ public_path() }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- InputMask -->
    <script src="{{ public_path() }}/plugins/moment/moment.min.js"></script>
    <script src="{{ public_path() }}/plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="{{ public_path() }}/plugins/moment/locale/pt.js"></script>
    <script src="{{ public_path() }}/plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="{{ public_path() }}/dist/js/grupo-scripts/customDatatables.js"></script>


    <script>
        $(function() {
            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

    </script>
@endsection
