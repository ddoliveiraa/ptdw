@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/adminlte.min.css">
    <!-- Para Image Picker -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/image-picker.css">


@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
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
                        <a role="button" href="{{ public_path() }}/produtos/add"
                        class="btn btn-block btn-secondary">{{ __('lang.adicionar') }}</a>
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
                                        <td><a href="{{ public_path() }}/ficha"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de hidrogénio</td>
                                        <td>HCL</td>
                                        <td>7766-21-2</td>
                                        <td>Sim</td>
                                        <td>Gramas</td>
                                        <td>120</td>
                                        <td>40</td>
                                        <td><a href="{{ public_path() }}/ficha"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de hidrogénio</td>
                                        <td>HCL</td>
                                        <td>7766-21-2</td>
                                        <td>Sim</td>
                                        <td>Gramas</td>
                                        <td>120</td>
                                        <td>40</td>
                                        <td><a href="{{ public_path() }}/ficha"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de Potássio</td>
                                        <td>xDD</td>
                                        <td>4343-21-2</td>
                                        <td>Não</td>
                                        <td>Gramas</td>
                                        <td>220</td>
                                        <td>40</td>
                                        <td><a href="{{ public_path() }}/ficha"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Cloreto de Potássio</td>
                                        <td>XDD</td>
                                        <td>4343-21-2</td>
                                        <td>Não</td>
                                        <td>Gramas</td>
                                        <td>220</td>
                                        <td>40</td>
                                        <td><a href="{{ public_path() }}/ficha"> Ver Mais &nbsp<i
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
    <script src="{{ public_path() }}/dist/js/image-picker.min.js"></script>

    <script>

        $(function() {

            var table = $("#tabelaprodutos").DataTable({
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
                ],
                "initComplete": function() {
                    table.buttons().container().appendTo('div.toolbar');
                    var selects = $("<select></select>").attr('id', 'tipo');
                    selects.addClass('form-control select col-md-1');
                    $('div.toolbar').append(selects);
                    $('#tipo').append(new Option("{{ __('lang.todos') }}", "Todos"));
                    $('#tipo').append(new Option("{{ __('lang.quimicos') }}", "Sim"));
                    $('#tipo').append(new Option("{{ __('lang.nao quimicos') }}", "Não"));

                    $.fn.dataTable.ext.search.push(
                        function(settings, searchData, index, rowData, counter) {
                            var tipo = $('#tipo option:selected').val();
                            var tipos = searchData[3]; // using the data from the 4th column

                            if (tipo == tipos) {
                                return tipos;
                            } else if (tipo == "Todos") {
                                return true;
                            }
                            return false;
                        }
                    );
                    $('#tipo').change(function() {
                        table.draw();
                    });
                }
            });

            
        });

    </script>
@endsection
