@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">


@endsection

@section('content')

    <!-- Content Header (Pdatas header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.historico') }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.historico') }}</h1>
                </div>
            </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <input type="text" class="form-control float-right" id="intervalo">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="historico" class="table table-bordered table-striped">
                            <thead class="bg-dark">
                                <tr>
                                    <th>{{ __('lang.designacao') }}</th>
                                    <th>{{ __('lang.fornecedor') }}</th>
                                    <th>{{ __('lang.cliente') }}</th>
                                    <th>{{ __('lang.n de ordem') }}</th>
                                    <th>{{ __('lang.embalagem') }}</th>
                                    <th>{{ __('lang.localização') }}</th>
                                    <th>{{ __('lang.data registo') }}</th>
                                    <th>{{ __('lang.movimento') }}</th>
                                    <th>{{ __('lang.operador') }}</th>
                                    <th>{{ __('lang.quimico') }}</th>
                                    <th>{{ __('lang.sub-familia') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Epinephrine</td>
                                    <td>Sisma</td>
                                    <td>Cliente 1</td>
                                    <td>23</td>
                                    <td>25ml</td>
                                    <td>A2-P1</td>
                                    <td>07-11-2011</td>
                                    <td>Entrada</td>
                                    <td>Fiel 1</td>
                                    <td>Sim</td>
                                    <td>Plástico</td>
                                    <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Propanol</td>
                                    <td>Sisma</td>
                                    <td>Cliente 2</td>
                                    <td>24</td>
                                    <td>50ml</td>
                                    <td>A1-P2</td>
                                    <td>07-11-2020</td>
                                    <td>Saída</td>
                                    <td>Fiel 3</td>
                                    <td>Sim</td>
                                    <td>Vidro</td>
                                    <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Ácido Maleico</td>
                                    <td>Opera</td>
                                    <td>Cliente 3</td>
                                    <td>26</td>
                                    <td>10ml</td>
                                    <td>A1-P5</td>
                                    <td>25-12-2017</td>
                                    <td>Saída</td>
                                    <td>Fiel 4</td>
                                    <td>Não</td>
                                    <td>Metal</td>
                                    <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Epinephrine</td>
                                    <td>Sisma</td>
                                    <td>Cliente 4</td>
                                    <td>27</td>
                                    <td>25ml</td>
                                    <td>A2-P1</td>
                                    <td>07-11-2020</td>
                                    <td>Saída</td>
                                    <td>Fiel 5</td>
                                    <td>Não</td>
                                    <td>Outros</td>
                                    <td><a href=""> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
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
    <script src="../../plugins/moment/moment.min.js"></script>

    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>

    <!-- script do grupo  NOTA: TRADUÇÕES PAREM DE FUNCIONAR DENTRO DAS COMBOBOXS-->
    {{-- <script src="../../dist/js/grupo-scripts/historico.js"></script>
    --}}

    <script>
        $(function() {
            
            $("#historico").DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": [9, 10],
                }],
                "dom": '<"toolbar">frtip',
                "info": false,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#export-buttons');
            $('#export-buttons').insertAfter('#historico');
            //filtragem por movimentos
            $.fn.dataTable.ext.search.push(
                function(settings, searchData, index, rowData, counter) {
                    var movimento = $('#movimento option:selected').val();
                    var movimentos = searchData[7]; // using the data from the 7th column

                    if (movimento == movimentos) {
                        return movimentos;
                    } else if (movimento == "Entradas e Saídas") {
                        return true;
                    }
                    return false;
                }
            );

            //filtragem por familia
            $.fn.dataTable.ext.search.push(
                function(settings, searchData, index, rowData, counter) {
                    var familia = $('#familia option:selected').val();
                    var familias = searchData[9]; // using the data from the 9th column

                    if (familia == familias) {
                        return movimentos;
                    } else if (familia == "Familia") {
                        return true;
                    }
                    return false;
                }
            );
            //filtragem por sub-familia
            $.fn.dataTable.ext.search.push(
                function(settings, searchData, index, rowData, counter) {
                    var subfamilia = $('#sub-familia option:selected').val();
                    var subfamilias = searchData[10]; // using the data from the 10th column

                    if (subfamilia == subfamilias) {
                        return movimentos;
                    } else if (subfamilia == "Sub-Familia") {
                        return true;
                    }
                    return false;
                }
            );


            //Date range picker
            $('#intervalo').daterangepicker({
                timePicker: false,
                locale: {
                    format: 'MM/DD/YYYY'
                }
            })

            //criação e inserção do botão pictogramas dentro da div da datatables
            var pictogramas = $("<button></button>").attr('id', 'pictogramas');
            pictogramas.addClass('btn btn-secondary col-md-2 float-right');
            $("div.toolbar").append(pictogramas);
            $("#pictogramas").text('{{ __('lang.pictograma') }}s');

            //Inserção do daterangepicker dentro da div da datatable
            $("div.toolbar").append($("#intervalo"));

            //criação e inserção da combobox movimentos dentro da div da datatable
            var movimentos = $("<select></select>").attr('id', 'movimento');
            movimentos.addClass('tools custom-select  float-right');
            $('div.toolbar').append(movimentos);
            $('#movimento').append(new Option("{{ __('lang.entradas e saidas') }}",
                "Entradas e Saídas"));
            $('#movimento').append(new Option("{{ __('lang.entrada') }}", "Entrada"));
            $('#movimento').append(new Option("{{ __('lang.saida') }}", "Saída"));

            //criação e inserção da combobox sub-familia dentro da div da datatable
            var subfamilia = $("<select></select>").attr('id', 'sub-familia');
            subfamilia.addClass('tools custom-select  float-right');
            $('div.toolbar').append(subfamilia);
            $('#sub-familia').append(new Option("{{ __('lang.sub-familia') }}",
                "Sub-Familia"));
            $('#sub-familia').append(new Option("{{ __('lang.vidro') }}", "Vidro"));
            $('#sub-familia').append(new Option("{{ __('lang.plastico') }}", "Plástico"));
            $('#sub-familia').append(new Option("{{ __('lang.metal') }}", "Metal"));
            $('#sub-familia').append(new Option("{{ __('lang.outros') }}", "Outros"));


            //criação e inserção da combobox familia dentro da div da datatable
            var familia = $("<select></select>").attr('id', 'familia');
            familia.addClass('tools custom-select  float-right');
            $('div.toolbar').append(familia);
            $('#familia').append(new Option("{{ __('lang.familia') }}",
                "Familia"));
            $('#familia').append(new Option("{{ __('lang.quimicos') }}", "Sim"));
            $('#familia').append(new Option("{{ __('lang.nao quimicos') }}", "Não"));




            $(document).ready(function() {
                var table = $('#historico').DataTable();
                $('#movimento').change(function() {
                    table.draw();
                });
                $('#familia').change(function() {
                    table.draw();
                });
                $('#sub-familia').change(function() {
                    table.draw();
                });
                /*                 $('#intervalo').on('apply.daterangepicker', function() {
                                    $.fn.dataTable.ext.search.push(
                                        function(settings, searchData, index, rowData, counter) {
                                            var inicio = $('#intervalo').data('daterangepicker').startDate
                                                .format("DD-MM-YYYY");
                                            var fim = $('#intervalo').data('daterangepicker').endDate.format(
                                                "DD-MM-YYYY");
                                            var datas = searchData[6]; // using the data from the 6th column
                                            console.log('incio = ' + inicio, ', ' + 'fim = ' + fim);

                                            if ((isNaN(inicio) && isNaN(fim)) ||
                                                (isNaN(inicio) && datas <= fim) ||
                                                (inicio <= datas && isNaN(fim)) ||
                                                (inicio <= datas && datas <= fim)) {
                                                return true;
                                            }
                                            return false;
                                        }
                                    );
                                    table.draw();
                                }); */
            });
        });

    </script>
@endsection
