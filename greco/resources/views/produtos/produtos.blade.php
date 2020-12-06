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
                        <li class="breadcrumb-item active">{{ __('lang.produtos') }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.produtos') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-end">
                <div class="col-md-2 mb-2 mt-2">
                    <button type="button" class="btn btn-block btn-secondary" data-toggle="modal"
                        data-target="#modalAdicionarProduto">{{ __('lang.adicionar') }}</button>
                </div>
            </div>
            <div class="row">
                <div class="col-12">

                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="tabelaprodutos" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.designacao') }}</th>
                                        <th>{{ __('lang.formula') }}</th>
                                        <th>{{ __('lang.n cas') }}</th>
                                        <th>{{ __('lang.quimico') }}</th>
                                        <th>{{ __('lang.unidades') }}</th>
                                        <th>{{ __('lang.stock existente') }}</th>
                                        <th>{{ __('lang.stock minimo') }}</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Cloreto de hidrogénio</td>
                                        <td>HCL</td>
                                        <td>7766-21-2</td>
                                        <td>Sim</td>
                                        <td>Gramas</td>
                                        <td>120</td>
                                        <td>40</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de hidrogénio</td>
                                        <td>HCL</td>
                                        <td>7766-21-2</td>
                                        <td>Sim</td>
                                        <td>Gramas</td>
                                        <td>120</td>
                                        <td>40</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de hidrogénio</td>
                                        <td>HCL</td>
                                        <td>7766-21-2</td>
                                        <td>Sim</td>
                                        <td>Gramas</td>
                                        <td>120</td>
                                        <td>40</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de Potássio</td>
                                        <td>xDD</td>
                                        <td>4343-21-2</td>
                                        <td>Não</td>
                                        <td>Gramas</td>
                                        <td>220</td>
                                        <td>40</td>
                                        <td>...</td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de Potássio</td>
                                        <td>XDD</td>
                                        <td>4343-21-2</td>
                                        <td>Não</td>
                                        <td>Gramas</td>
                                        <td>220</td>
                                        <td>40</td>
                                        <td>...</td>
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

        <!-- Modal -->

        <!-- Default Model Large -->
        <div class="modal fade" id="modalAdicionarProduto">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.adicionar') }} {{ __('lang.produto') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_designacao" class="control-label">{{ __('lang.designacao') }}</label>
                                        <input type="text" class="form-control" id="produto_designacao" tabindex="1" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_formula" class="control-label">{{ __('lang.formula') }}</label>
                                        <input type="text" class="form-control" id="produto_formula" tabindex="2" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_peso" class="control-label">{{ __('lang.peso molecular') }}</label>
                                        <input type="text" class="form-control" id="produto_peso" tabindex="3" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_cas" class="control-label">{{ __('lang.n cas') }}</label>
                                        <input type="text" class="form-control" id="produto_cas" tabindex="4" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_condicoes_armazenamento" class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                        <input type="text" class="form-control" id="produto_condicoes_armazenamento" tabindex="5"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_armario" class="control-label">{{ __('lang.armario ventilado') }}</label>
                                        <input type="text" class="form-control" id="produto_armario" tabindex="6" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_pictogramas" class="control-label">{{ __('lang.pictograma') }}</label>
                                        <div class="input-group margin">
                                            <input type="text" class="form-control" id="produto_pictogramas" tabindex="7" required readonly>
                                            <span class="input-group-btn">
                                            <button type="button" class="btn btn-info btn-flat">{{ __('lang.selecionar') }}</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_unidades" class="control-label">{{ __('lang.unidades') }}</label>
                                        <input type="text" class="form-control" id="produto_unidades" tabindex="8" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_cod_recomendacoes_prudencia" class="control-label">{{ __('lang.recomendacoes de prudencia') }}</label>
                                        <input type="text" class="form-control" id="produto_cod_recomendacoes_prudencia" tabindex="9"
                                            required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_cod_advertencias_perigo" class="control-label">{{ __('lang.advertencias de perigo') }}</label>
                                        <input type="text" class="form-control" id="produto_cod_advertencias_perigo" tabindex="10"
                                            required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_stock_existente" class="control-label">{{ __('lang.stock existente') }}</label>
                                        <input type="text" class="form-control" id="produto_stock_existente" tabindex="11" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="produto_stock_minimo" class="control-label">{{ __('lang.stock minimo') }}</label>
                                        <input type="text" class="form-control" id="produto_stock_minimo" tabindex="12" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-primary col-md-3" tabindex="14" >{{ __('lang.adicionar') }}</button>
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
            $("#tabelaprodutos").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tabelaprodutos_wrapper .col-md-6:eq(0)');

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
            var selects = $("<select></select>").attr('id', 'tipo');
            selects.addClass('custom-select .form-control-sm');
            $('#tabelaprodutos_filter').append(selects);
            $('#tipo').append(new Option("{{ __('lang.todos') }}", "Todos"));
            $('#tipo').append(new Option("{{ __('lang.quimicos') }}", "Sim"));
            $('#tipo').append(new Option("{{ __('lang.nao quimicos') }}", "Não"));


            $(document).ready(function() {
                var table = $('#tabelaprodutos').DataTable();
                // Event listener to the two range filtering inputs to redraw on input
                $('#tipo').change(function() {
                    table.draw();
                });
            });
        });

    </script>
@endsection
