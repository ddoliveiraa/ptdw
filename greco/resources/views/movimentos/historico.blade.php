@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/adminlte.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/daterangepicker/daterangepicker.css">


@endsection

@section('content')

    <!-- Content Header (Pdatas header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
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
            <input type="text" class="col-md-2 form-control" id="intervalo">
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="historico" class="table table-bordered table-striped">
                            <thead class="bg-dark">
                                <tr>
                                    <th>{{ __('lang.produto') }}</th>
                                    <th>{{ __('lang.movimento') }}</th>
                                    <th>{{ __('lang.n de ordem') }}</th>
                                    <th>{{ __('lang.localização') }}</th>
                                    <th>{{ __('lang.embalagem') }}</th>
                                    <th>{{ __('lang.cliente') }}</th>
                                    <th>{{ __('lang.fornecedor') }}</th>
                                    <th>{{ __('lang.data de entrada') }}</th>
                                    <th>{{ __('lang.data de validade') }}</th>
                                    <th>{{ __('lang.data de termino') }}</th>
                                    <th>{{ __('lang.operador') }}</th>
                                    <th>{{ __('lang.familia') }}</th>
                                    <th>{{ __('lang.sub-familia') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Cloreto de Hidrogénio</td>
                                    <td>Saída</td>
                                    <td>23</td>
                                    <td>A2-P1</td>
                                    <td>25ml</td>
                                    <td>Cliente 1</td>
                                    <td>Sisma</td>
                                    <td>07-11-2011</td>
                                    <td>07-12-2011</td>
                                    <td>07-3-2012</td>
                                    <td>Fiel</td>
                                    <td>Químico</td>
                                    <td>--</td>
                                    <td><a href="{{ public_path() }}/movimentos/show"> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                                <tr>
                                    <td>Luvas</td>
                                    <td>Entrada</td>
                                    <td>34</td>
                                    <td>A2-P1</td>
                                    <td>20 unidades</td>
                                    <td>Cliente 1</td>
                                    <td>Sisma</td>
                                    <td>07-11-2011</td>
                                    <td>--</td>
                                    <td>--</td>
                                    <td>Fiel</td>
                                    <td>Não Químico</td>
                                    <td>Plástico</td>
                                    <td><a href="{{ public_path() }}/movimentos/show"> Ver Mais &nbsp<i class="fa fa-arrow-right"></i></a></td>
                                </tr>
                            </tbody>
                        </table>
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
    <script src="{{ public_path() }}/plugins/moment/moment.min.js"></script>

    <!-- date-range-picker -->
    <script src="{{ public_path() }}/plugins/daterangepicker/daterangepicker.js"></script>

    <!-- script do grupo  NOTA: TRADUÇÕES PAREM DE FUNCIONAR DENTRO DAS COMBOBOXS-->
    {{-- <script src="{{ public_path() }}/dist/js/grupo-scripts/historico.js"></script>
    --}}

    <script>
        $(function() {

            $("#historico").DataTable({
                "dom": '<"toolbar">frtip',
                "info": true,
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
                    'colvis'
                ],
            }).buttons().container().appendTo('div.toolbar');

            //filtragem por movimentos
            $.fn.dataTable.ext.search.push(
                function(settings, searchData, index, rowData, counter) {
                    var movimento = $('#movimento option:selected').val();
                    var movimentos = searchData[1]; // using the data from the 2nd column

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
                    var familias = searchData[11]; // using the data from the 12th column

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
                    var subfamilias = searchData[12]; // using the data from the 13th column

                    if (subfamilia == subfamilias) {
                        return movimentos;
                    } else if (subfamilia == "Sub-Familia") {
                        return true;
                    }
                    return false;
                }
            );


            $('#historico_filter').addClass('col-md-2')

            //Date range picker
            $('#intervalo').daterangepicker({
                timePicker: false,
                locale: {
                    format: 'MM/DD/YYYY'
                }
            })

            //criação e inserção do botão pictogramas dentro da div da datatables
            var pictogramas = $("<button></button>").attr('id', 'pictogramas');
            pictogramas.addClass('col-md-1 btn btn-secondary');
            $("div.toolbar").append(pictogramas);
            $("#pictogramas").text("{{ __('lang.pictograma') }}s");

            //Inserção do daterangepicker dentro da div da datatable
            $("div.toolbar").append($("#intervalo"));

            //criação e inserção da combobox movimentos dentro da div da datatable
            var movimentos = $("<select></select>").attr('id', 'movimento');
            movimentos.addClass('col-md-1 form-control select');
            $('div.toolbar').append(movimentos);
            $('#movimento').append(new Option("{{ __('lang.movimento') }}",
                "Entradas e Saídas"));
            $('#movimento').append(new Option("{{ __('lang.entrada') }}", "Entrada"));
            $('#movimento').append(new Option("{{ __('lang.saida') }}", "Saída"));

            //criação e inserção da combobox sub-familia dentro da div da datatable
            var subfamilia = $("<select></select>").attr('id', 'sub-familia');
            subfamilia.addClass('col-md-1 form-control select');
            $('div.toolbar').append(subfamilia);
            $('#sub-familia').append(new Option("{{ __('lang.sub-familia') }}",
                "Sub-Familia"));
            $('#sub-familia').append(new Option("{{ __('lang.vidro') }}", "Vidro"));
            $('#sub-familia').append(new Option("{{ __('lang.plastico') }}", "Plástico"));
            $('#sub-familia').append(new Option("{{ __('lang.metal') }}", "Metal"));
            $('#sub-familia').append(new Option("{{ __('lang.outros') }}", "Outros"));
            $('#sub-familia').css('display', 'none');


            //criação e inserção da combobox familia dentro da div da datatable
            var familia = $("<select></select>").attr('id', 'familia');
            familia.addClass('col-md-1 form-control select');
            $('div.toolbar').append(familia);
            $('#familia').append(new Option("{{ __('lang.familia') }}",
                "Familia"));
            $('#familia').append(new Option("{{ __('lang.quimicos') }}", "Químico"));
            $('#familia').append(new Option("{{ __('lang.nao quimicos') }}", "Não Químico"));

            //criação e inserção do botão pictogramas dentro da div da datatables
            var filter = $("<button></button>").attr('id', 'filter');
            filter.addClass('btn btn-danger');
            $("div.toolbar").append(filter);
            $("#filter").text("Reset");




            $(document).ready(function() {
                var table = $('#historico').DataTable();
                $('#sub-familia').hide(100);
                $("#pictogramas").show(100);
                $('#filter').click(function() {
                    $('#familia').val('Familia');
                    $('#sub-familia').val('Sub-Familia');
                    $('#movimento').val('Entradas e Saídas');
                    table.draw();
                });
                $('#movimento').change(function() {
                    table.draw();
                });

                $('#familia').change(function() {
                    var familia = $('#familia option:selected').val();
                    console.log("familia selecionada: " + familia);
                    if (familia == "Não Químico") {
                        $('#sub-familia').show(100);
                        $("#pictogramas").hide(100);
                    } else {
                        $('#sub-familia').hide(100);
                        $('#sub-familia').val('Sub-Familia');
                        $("#pictogramas").show(100);
                    }
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
