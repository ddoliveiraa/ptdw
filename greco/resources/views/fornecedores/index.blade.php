@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    
    
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
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
                    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                        data-target="#modalAdicionarFornecedores">{{ __('lang.adicionar') }}</button>
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
                <div id="export-buttons"></div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-flu-id -->

     <!-- Default Model Large -->
     <div class="modal fade" id="modalAdicionarFornecedores">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.adicionar') }} {{ __('lang.fornecedores') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="fornecedor_designacao" class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_designacao" tabindex="1" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="fornecedor_rua" class="control-label">{{ __('lang.rua') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_rua" tabindex="2" required>
                                    </div>
                                </div>
                                <div class="col-md-1">
                                    <div class="form-group">
                                        <label for="fornecedor_numero" class="control-label">{{ __('lang.numero') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_numero" tabindex="3" required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="fornecedor_lote" class="control-label">{{ __('lang.lote') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_lote" tabindex="4" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fornecedor_localidade" class="control-label">{{ __('lang.localidade') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_localidade" tabindex="5"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fornecedor_codigopostal" class="control-label">{{ __('lang.codigo postal') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_codigopostal" tabindex="6" required>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fornecedor_nif" class="control-label">{{ __('lang.nif') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_nif" tabindex=7" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label for="fornecedor_localidade" class="control-label">{{ __('lang.email') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_localidade" tabindex="8">
                                    </div>
                                </div>
                                 <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="fornecedor_telefone" class="control-label">{{ __('lang.telefone') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_telefone" tabindex="9" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fornecedor_condicoesespeciais" class="control-label">{{ __('lang.condicoes especiais') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_condicoesespeciais" tabindex="10">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="fornecedor_observacoes" class="control-label">{{ __('lang.observacoes') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_observacoes" tabindex="11">
                                    </div>
                                </div>
                            </div>

                            <!--VENDEDOR 1-->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <hr class="mt-3 mb-3"/>
                                        <label for="fornecedor_vendedor1" class="control-label">{{ __('lang.vendedor1') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fornecedor_nomevendedor1" class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_nomevendedor1" tabindex="12">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="fornecedor_emailvendedor1" class="control-label">{{ __('lang.email') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_emailvendedor1" tabindex="13">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fornecedor_telemovelvendedor1" class="control-label">{{ __('lang.telemovel') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_telemovelvendedor1" tabindex="14">
                                    </div>
                                </div>
                            </div>
                            <!--VENDEDOR 2-->
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <hr class="mt-3 mb-3"/>
                                        <label for="fornecedor_vendedor2" class="control-label">{{ __('lang.vendedor2') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="fornecedor_nomevendedor2" class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_nomevendedor2" tabindex="15">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label for="fornecedor_emailvendedor2" class="control-label">{{ __('lang.email') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_emailvendedor2" tabindex="16">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="fornecedor_telemovelvendedor2" class="control-label">{{ __('lang.telemovel') }}</label>
                                        <input type="text" class="form-control" id="fornecedor_telemovelvendedor2" tabindex="17">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal" tabindex="18">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-primary col-md-3" tabindex="19" >{{ __('lang.adicionar') }}</button>
                        </div>
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

    <script>

        $('#modalAdicionarFornecedores').on('shown.bs.modal', function() {
                    $('#fornecedor_designacao').focus();
                });

        $(function() {
            $("#tabelafornecedores").DataTable({
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
            }).buttons().container().appendTo('#export-buttons');
            $('#export-buttons').appendTo('div.toolbar');

            $.fn.dataTable.ext.search.push(
                function(settings, searchData, index, rowData, counter) {
                    var tipo = $('#tipo option:selected').val();
                    var tipos = searchData[3]; // using the data from the 4th column
                    console.log(tipo.localeCompare(tipos))

                    if (tipo == tipos) {
                        return tipos;
                    } else if (tipo == "Todos") {
                        return true;
                    }
                    return false;
                }
            );

            $(document).ready(function() {
                var table = $('#tabelafornecedores').DataTable();
                // Event listener to the two range filtering inputs to redraw on input
                $('#tipo').change(function() {
                    table.draw();
                });
            });
        });

    </script>
@endsection
