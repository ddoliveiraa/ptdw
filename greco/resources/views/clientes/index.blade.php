@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
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
                    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                        data-target="#modal_add_cliente">{{ __('lang.adicionar') }}</button>
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
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 1</td>
                                        <td>Bruno Ferreira</td>
                                        <td>bruno@ua.pt</td>
                                        <td>7</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 2</td>
                                        <td>Diogo Oliveira</td>
                                        <td>diogo@ua.pt</td>
                                        <td>15</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 3</td>
                                        <td>Maria Nobre</td>
                                        <td>maria@ua.pt</td>
                                        <td>8</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Equipa de Pesquisa 4</td>
                                        <td>Carolina Tavares</td>
                                        <td>carol@ua.pt</td>
                                        <td>3</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <div id="export-buttons"></div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->

        <!-- Default Model Large -->
        <div class="modal fade" id="modal_add_cliente">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.adicionar') }} {{ __('lang.cliente') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="designacao" class="control-label">{{ __('lang.designacao') }}</label>
                                        <input type="text" class="form-control" id="designacao" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome_responsavel" class="control-label">{{ __('lang.responsavel') }} -
                                            {{ __('lang.nome') }}</label>
                                        <input type="text" class="form-control" id="nome_responsavel" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_responsavel" class="control-label">{{ __('lang.responsavel') }} -
                                            {{ __('lang.email') }}</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email_responsavel" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-at"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome_solicitante" class="control-label">{{ __('lang.solicitante') }} -
                                            {{ __('lang.nome') }}</label>
                                        <input type="text" class="form-control" id="nome_solicitante" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_solicitante" class="control-label">{{ __('lang.solicitante') }} -
                                            {{ __('lang.email') }}</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control" id="email_solicitante" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="fa fa-at"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="obvs">{{ __('lang.observacoes') }}</label>
                                        <textarea id="obvs" maxlength="100" class="form-control" rows="2"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3"
                                data-dismiss="modal">{{ __('lang.cancelar') }}</button>
                            <button type="submit" class="btn col-md-3 btn-secondary">{{ __('lang.adicionar') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>

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

    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../../plugins/moment/locale/pt.js"></script>
    <script src="../../plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


    <script>
        $('#modal_add_cliente').on('shown.bs.modal', function() {
            $('#nome_cliente').focus();
        });

        $(function() {
            $("#tabela_clientes").DataTable({
                "dom": '<"toolbar">frtip',
                "info": true,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": [
                    {
                        extend: 'csvHtml5',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    'colvis'
                ],
            }).buttons().container().appendTo('#export-buttons');
            $('#export-buttons').appendTo('div.toolbar');

            $(document).ready(function() {
                var table = $('#tabela_clientes').DataTable();
                // Event listener to the two range filtering inputs to redraw on input
                $('#tipo').change(function() {
                    table.draw();
                });
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
