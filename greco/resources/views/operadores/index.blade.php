@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.operadores') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center display-4">{{ __('lang.operadores') }}</h2>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            
            <div class="row justify-content-end">
                <div class="col-md-2 mb-2 mt-2">
                    <button type="button" class="btn btn-block btn-secondary">{{ __('lang.historico') }}</button>
                </div>
                <div class="col-md-2 mb-2 mt-2">
                    <button type="button" class="btn btn-block btn-secondary">{{ __('lang.adicionar') }}</button>
                </div>

            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabela_operadores" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.nome') }}</th>
                                        <th>{{ __('lang.email') }}</th>
                                        <th>{{ __('lang.perfil') }}</th>
                                        <th>{{ __('lang.data-criacao') }}</th>
                                        <th>{{ __('lang.data-desativ') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carolina</td>
                                        <td>carol@ua.pt</td>
                                        <td>Supervisor Setorial</td>
                                        <td>01/11/2018</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Austin</td>
                                        <td>austin@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>02/12/2018</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>bruno@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>21/11/2018</td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>João Feijão</td>
                                        <td>jf@ua.pt</td>
                                        <td>Supervisor Setorial</td>
                                        <td>01/11/2018</td>
                                        <td>02/12/2019</td>
                                    </tr>
                                    <tr>
                                        <td>Ana Silva</td>
                                        <td>ana@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>01/09/2018</td>
                                        <td>03/05/2019</td>
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

    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <script>
        $('#modalAdicionarProduto').on('shown.bs.modal', function() {
            $('#produto_designacao').focus();
        });

        $(function() {
            $("#tabela_operadores").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tabela_operadores_wrapper .col-md-6:eq(0)');

            $(document).ready(function() {
                var table = $('#tabela_operadores').DataTable();
                // Event listener to the two range filtering inputs to redraw on input
                $('#tipo').change(function() {
                    table.draw();
                });
            });
        });

    </script>
@endsection
