@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/adminlte.min.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.fornecedores') }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.fornecedores') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <!-- Botão adicionar Fornecedores -->
            <div class="row justify-content-end">
                <div class="col-md-2 mb-2 mt-2">
                    <a role="button" href="{{ public_path() }}/fornecedores/add"
                        class="btn btn-block btn-secondary">{{ __('lang.adicionar') }}</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabelafornecedores" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.designacao') }}</th>
                                        <th>{{ __('lang.rua lote n') }}</th>
                                        <th>{{ __('lang.localidade') }}</th>
                                        <th>{{ __('lang.codigo postal') }}</th>
                                        <th>{{ __('lang.telefone') }}</th>
                                        <th>{{ __('lang.nif') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-flu-id -->
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

    <script>

        $(function() {
            var table = $("#tabelafornecedores").DataTable({
                "dom": '<"toolbar">frtip',
                "info": true,
                "language": {
                    "url": "{{ __('lang.url-lang-dt') }}",
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [{
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    'colvis'
                ],
                "initComplete": function() {
                    table.buttons().container().appendTo('div.toolbar');
                }
            });
        });
    </script>
@endsection