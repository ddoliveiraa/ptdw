@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/operadores">{{ __('lang.operadores') }}</a>
                        </li>
                        <li class="breadcrumb-item active">Ana Silva</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">Ana Silva</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome_operador" class="control-label">{{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nome_operador" disabled
                                                    value="Ana Silva">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_operador" class="control-label">{{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email_operador"
                                                    value="ana@ua.pt" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="perfil_operador"
                                                class="control-label">{{ __('lang.perfil') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="perfil_operador"
                                                    value="Fiel de Armazém" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_criacao">{{ __('lang.data-criacao') }}</label>
                                            <div class="input-group date" id="data_criacao" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_criacao" value="01/09/2018" disabled />
                                                <div class="input-group-append" data-target="#data_criacao"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                    <h3>{{ __('lang.historico') }} {{ __('lang.operador') }}</h3>
                                    <table id="operadores_show" class="table table-bordered table-striped">
                                        <thead class="bg-dark">
                                            <tr>
                                                <th>{{ __('lang.data-operacao') }}</th>
                                                <th>{{ __('lang.operacao') }}</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>01/11/2018</td>
                                                <td>Registo Operador</td>
                                                <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>21/11/2018</td>
                                                <td>Registo Entrada</td>
                                                <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>11/11/2018</td>
                                                <td>Registo Saida</td>
                                                <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" class="form-control" rows="4" disabled></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/operadores" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.voltar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="{{ public_path() }}/operadores/editar" role="button"
                                            class="btn btn-block btn-secondary">{{ __('lang.editar') }}</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </section>
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

    <script src="{{ public_path() }}/dist/js/grupo-scripts/customDatatables.js"></script>
@endsection
