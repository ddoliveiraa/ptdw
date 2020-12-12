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
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno Ferreira</td>
                                        <td>Travessa Barreiro do Meio Nº7</td>
                                        <td>Estarreja</td>
                                        <td>3860-219</td>
                                        <td>912321321</td>
                                        <td>531321321</td>
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
            $("#tabelafornecedores").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#tabelafornecedores_wrapper .col-md-6:eq(0)');

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
