@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">    
@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Produtos</li>
                </ol>
            </div>
        </div>
    </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center display-4">Produtos</h2>
                </div>
                
                <!-- SEARCH FORM & FILTRO & ADICIONAR PRODUTO-->
                <div class="col-md-10">
                        <div class="float-left">
                            <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" placeholder="Pesquisar" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="float-left">
                            <button type="button" class="btn btn-block btn-default btn-sm">Filtrar</button>
                        </div>
                </div>

                <div class="col-md-2">
                    <div class="float-right">
                        <button type="button" class="btn btn-block btn-default btn-sm" data-toggle="modal" data-target="#modal-lg">Adicionar Produto</button>
                    </div>
                </div>
                
                
                
                
            </div>

        </div><!-- /.container-fluid -->
    </section>
    

    <section class="content">
      <div class="container-fluid">
        <div class="row">  
          <div class="col-12">

              <div class="card">

              <!-- /.card-header -->
              <div class="card-body">

                <table id="tabelaprodutos" class="table table-bordered table-striped">
                  <thead class="bg-secondary">
                  <tr>
                    <th>Designação</th>
                    <th>Formula</th>
                    <th>CAS nº</th>
                    <th>Químico</th>
                    <th>Unidades</th>
                    <th>Stock Existente</th>
                    <th>Stock Minimo</th>
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
    <div class="modal fade" id="modal-lg">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Adicionar Produto</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div><form>
                <div class="modal-body">
                    
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_designacao" class="control-label">Designação</label>
                                <input type="text" class="form-control" id="produto_designacao" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_formula" class="control-label">Formula</label>
                                <input type="text" class="form-control" id="produto_formula" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_peso" class="control-label">Peso molecular</label>
                                <input type="text" class="form-control" id="produto_peso" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_cas" class="control-label">CAS Nº</label>
                                <input type="text" class="form-control" id="produto_cas" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_condicoes_armazenamento" class="control-label">Condições de Armazenamento</label>
                                <input type="text" class="form-control" id="produto_condicoes_armazenamento" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_armario" class="control-label">Armário ventilado</label>
                                <input type="text" class="form-control" id="produto_armario" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_pictogramas" class="control-label">Pictogramas</label>
                                <input type="text" class="form-control" id="produto_pictogramas" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_unidades" class="control-label">Unidades</label>
                                <input type="text" class="form-control" id="produto_unidades" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_cod_recomendacoes_prudencia" class="control-label">Códigos de Recomendações de Prudência</label>
                                <input type="text" class="form-control" id="produto_cod_recomendacoes_prudencia" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_cod_advertencias_perigo" class="control-label">Codigos de Advertências de Perigo</label>
                                <input type="text" class="form-control" id="produto_cod_advertencias_perigo" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_stock_existente" class="control-label">Stock Existente</label>
                                <input type="text" class="form-control" id="produto_stock_existente" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="produto_stock_minimo" class="control-label">Stock Minimo</label>
                                <input type="text" class="form-control" id="produto_stock_minimo" required>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary">Guardar Produto</button>
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
        $('#modalAdicionarProduto').on('shown.bs.modal', function () {
            $('#myInput').focus();
        });

        $(function() {
            $("#tabelaprodutos").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tabelaprodutos_wrapper .col-md-6:eq(0)');
        });
    </script>    
@endsection
