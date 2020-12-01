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
                        <button type="button" class="btn btn-block btn-default btn-sm">Adicionar Produto</button>
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
                <table id="example1" class="table table-bordered table-striped">
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

    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../../plugins/moment/locale/pt.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- DataTables  & Plugins -->
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
      $(function() {
          $("#example1").DataTable({
              "responsive": true,
              "lengthChange": false,
              "autoWidth": false,
              "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
          }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
          $('#example2').DataTable({
              "paging": true,
              "lengthChange": false,
              "searching": false,
              "ordering": true,
              "info": true,
              "autoWidth": false,
              "responsive": true,
          });
      });
  </script>
@endsection
