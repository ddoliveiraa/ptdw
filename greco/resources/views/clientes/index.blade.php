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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.clientes') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.clientes') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">

            <div class="row justify-content-end">
                <div class="col-md-2 mb-2 mt-2">
                    <a role="button" href="{{ public_path() }}/clientes/add"
                        class="btn btn-block btn-secondary">{{ __('lang.adicionar') }}</a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabela_clientes" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.designacao') }}</th>
                                        <th>{{ __('lang.responsavel') }} - {{ __('lang.nome') }}</th>
                                        <th>{{ __('lang.responsavel') }} - {{ __('lang.email') }}</th>
                                        <th>Nº {{ __('lang.solicitante') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Departamento de Biologia</td>
                                        <td>Carolina Tavares</td>
                                        <td>carol@ua.pt</td>
                                        <td>4</td>
                                        <td><a href="{{ public_path() }}/clientes/show"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 1</td>
                                        <td>Bruno Ferreira</td>
                                        <td>bruno@ua.pt</td>
                                        <td>7</td>
                                        <td><a href="{{ public_path() }}/clientes/show"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 2</td>
                                        <td>Diogo Oliveira</td>
                                        <td>diogo@ua.pt</td>
                                        <td>15</td>
                                        <td><a href="{{ public_path() }}/clientes/show"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 3</td>
                                        <td>Maria Nobre</td>
                                        <td>maria@ua.pt</td>
                                        <td>8</td>
                                        <td><a href="{{ public_path() }}/clientes/show"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 4</td>
                                        <td>Carolina Tavares</td>
                                        <td>carol@ua.pt</td>
                                        <td>3</td>
                                        <td><a href="{{ public_path() }}/clientes/show"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
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


    <script>
        $(function() {
            var table = $("#tabela_clientes").DataTable({
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

        $(function() {
            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

    </script>
@endsection
