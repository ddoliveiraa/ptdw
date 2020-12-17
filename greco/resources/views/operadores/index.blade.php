@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
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

            <div class="row justify-content-end">
                <div class="col-md-2 mb-2 mt-2">
                    <a href="/operadores/historico" class="btn btn-secondary btn-block"
                        role="button">{{ __('lang.historico') }}</a>
                </div>
                <div class="col-md-2 mb-2 mt-2">
                    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                        data-target="#modal_add_operador">{{ __('lang.adicionar') }}</button>
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
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Carolina</td>
                                        <td>carol@ua.pt</td>
                                        <td>Supervisor Setorial</td>
                                        <td>01/11/2018</td>
                                        <td>-</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Austin</td>
                                        <td>austin@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>02/12/2018</td>
                                        <td>-</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>bruno@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>21/11/2018</td>
                                        <td>-</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>João Feijão</td>
                                        <td>jf@ua.pt</td>
                                        <td>Supervisor Setorial</td>
                                        <td>01/11/2018</td>
                                        <td>02/12/2019</td>
                                        <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ana Silva</td>
                                        <td>ana@ua.pt</td>
                                        <td>Fiel de Armazém</td>
                                        <td>01/09/2018</td>
                                        <td>03/05/2019</td>
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
        <!-- /.container-fluid -->

        <!-- Default Model Large -->
        <div class="modal fade" id="modal_add_operador">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.adicionar') }} {{ __('lang.operador') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nome_operador" class="control-label">{{ __('lang.nome') }}</label>
                                        <input type="text" class="form-control" id="nome_operador" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email_operador" class="control-label">{{ __('lang.email') }}</label>
                                        <input type="text" class="form-control" id="email_operador" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="perfil_operador">{{ __('lang.perfil') }}</label>
                                        <select class="form-control select" id="perfil_operador" style="width: 100%;">
                                            <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                {{ __('lang.perfil') }}
                                            </option>
                                            <option>Fiel de Armazém</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="data_criacao">{{ __('lang.data-criacao') }}</label>
                                        <div class="input-group date" id="data_criacao" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#data_criacao" placeholder="DD/MM/YYYY" />
                                            <div class="input-group-append" data-target="#data_criacao"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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

    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../plugins/moment/locale/pt.js"></script>
    <script src="../plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>


    <script>
        $('#modal_add_operador').on('shown.bs.modal', function() {
            $('#nome_operador').focus();
        });
        

        $(function() {
            $("#tabela_operadores").DataTable({
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
                        extend: 'print',
                        exportOptions: {
                            columns: ':visible:not(:last-child)'
                        }
                    },
                    'colvis'
                ],
            }).buttons().container().appendTo('div.toolbar');

            $(document).ready(function() {
                var table = $('#tabela_operadores').DataTable();
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
