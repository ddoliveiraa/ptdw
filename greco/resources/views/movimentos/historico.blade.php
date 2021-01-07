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
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="card card-dark">
                    <div class="card-header">
                        <h3 class="card-title text-light">Filtros</h3>
                    </div>
                    <div class="card-body sup">
                        <div class="filtros">
                            <select id="familia" class="col-md-12 form-control select">
                                <option value="Familia">{{ __('lang.familia') }}</option>
                                <option value="Quimico">{{ __('lang.quimicos') }}</option>
                                <option value="Não Quimico">{{ __('lang.nao quimicos') }}</option>
                            </select><select id="sub-familia" class="col-md-12 form-control select" style="display: none;">
                                <option value="Sub-Familia">{{ __('lang.sub-familia') }}</option>
                                <option value="Vidro">{{ __('lang.vidro') }}</option>
                                <option value="Plástico">{{ __('lang.plastico') }}</option>
                                <option value="Metal">{{ __('lang.metal') }}</option>
                                <option value="Outros">{{ __('lang.outros') }}</option>
                            </select>
                            <select id="movimento" class="col-md-12 form-control select">
                                <option value="Movimento">{{ __('lang.movimento') }}</option>
                                <option value="Entrada">{{ __('lang.entrada') }}</option>
                                <option value="Saída">{{ __('lang.saida') }}</option>
                            </select>
                            <input type="text" class="col-md-12 form-control" id="intervalo">
                            <button id="pictogramas"
                                class="col-md-12 btn btn-secondary">{{ __('lang.pictograma') }}s</button>
                            <button id="filter" class="btn btn-danger btn-block">Reset</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-10">
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="historico" class="table table-bordered table-striped">
                            <thead class="bg-dark">
                                <tr>
                                    <th>{{ __('lang.produto') }}</th>
                                    <th>{{ __('lang.movimento') }}</th>
                                    <th>{{ __('lang.n-embalagem') }}</th>
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
                                @foreach ($entradas as $entrada)
                                    <tr>
                                        <td>{{ $entrada->id_inventario }}</td>
                                        <td>Entrada</td>
                                        <td>{{ $entrada->id_inventario }} - {{ $entrada->id_ordem }}</td>
                                        <td>S{{ $entrada->sala }} - A{{ $entrada->armario }} - P{{ $entrada->prataleira }}</td>
                                        <td>{{ $entrada->capacidade }}</td>
                                        <td></td>
                                        <td>{{ $entrada->fornecedor }}</td>
                                        <td>{{ $entrada->data_entrada }}</td>
                                        <td>{{ $entrada->validade }}</td>
                                        <td>{{ $entrada->termino }}</td>
                                        <td>{{ $entrada->operador }}</td>
                                        <td>Quimico</td>
                                        <td>--</td>
                                        <td><a href="{{ public_path() }}/movimentos/show_saida"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                @endforeach

                                @foreach ($saidas as $saida)
                                    <tr>
                                        <td>{{ $saida->id_produto }}</td>
                                        <td>Saida</td>
                                        <td>{{ $saida->id_produto }} - {{ $saida->id_ordem }}</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $saida->id_cliente }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>{{ $saida->id_operador }}</td>
                                        <td>Quimico</td>
                                        <td>--</td>
                                        <td><a href="{{ public_path() }}/movimentos/show_saida"> Ver Mais &nbsp<i
                                                    class="fa fa-arrow-right"></i></a></td>
                                    </tr>
                                @endforeach
                                
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

        <!-- Modal Selecionar Pictograma-->
        <div class="modal fade" id="modalSelecionarPictograma" data-backdrop="static">

            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.filtrar') }} {{ __('lang.pictograma') }}s</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check-pictogram">
                                            <ul>
                                                <li>
                                                    <input type="checkbox" id="cb1" />
                                                    <label for="cb1"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Explosive.gif" />
                                                        <p class="text-center">GHS01</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb2" />
                                                    <label for="cb2"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Flammable.gif" />
                                                        <p class="text-center">GHS02</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb3" />
                                                    <label for="cb3"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/RoundFlammable.gif" />
                                                        <p class="text-center">GHS03</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb4" />
                                                    <label for="cb4"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/CompressedGas.gif" />
                                                        <p class="text-center">GHS04</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb5" />
                                                    <label for="cb5"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Corrosive.gif" />
                                                        <p class="text-center">GHS05</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb6" />
                                                    <label for="cb6"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Toxic.gif" />
                                                        <p class="text-center">GHS06</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb7" />
                                                    <label for="cb7"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Danger.gif" />
                                                        <p class="text-center">GHS07</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb8" />
                                                    <label for="cb8"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Systemic.gif" />
                                                        <p class="text-center">GHS08</p>
                                                    </label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb9" />
                                                    <label for="cb9"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Pollution.gif" />
                                                        <p class="text-center">GHS09</p>
                                                    </label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                                tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal"
                                tabindex="14">{{ __('lang.aplicar') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>
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
            var table = $("#historico").DataTable({
                "dom": '<"search">frtip',
                "info": true,
                "language": {
                    "url": "{{ __('lang.url-lang-dt') }}",
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "columnDefs": [{
                        "targets": [3, 6, 10, 11, 12],
                        "visible": false
                    },
                    {
                        "targets": [7, 8, 9],
                        "type": 'date-us'
                    }
                ],
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
                    table.buttons().container().appendTo('#historico_filter');
                    //filtragem por movimentos
                    $.fn.dataTable.ext.search.push(
                        function(settings, searchData, index, rowData, counter) {
                            var movimento = $('#movimento option:selected').val();
                            var movimentos = searchData[1]; // using the data from the 2nd column

                            if (movimento == movimentos) {
                                return movimentos;
                            } else if (movimento == "Movimento") {
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
                                return familias;
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
                                return subfamilias;
                            } else if (subfamilia == "Sub-Familia") {
                                return true;
                            }
                            return false;
                        }
                    );

                    jQuery.extend(jQuery.fn.dataTableExt.oSort, {
                        "date-uk-pre": function(a) {
                            var ukDatea = a.split('/');
                            return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
                        },

                        "date-uk-asc": function(a, b) {
                            return ((a < b) ? -1 : ((a > b) ? 1 : 0));
                        },

                        "date-uk-desc": function(a, b) {
                            return ((a < b) ? 1 : ((a > b) ? -1 : 0));
                        }
                    });

                    //Date range picker
                    $('#intervalo').daterangepicker({
                        timePicker: false,
                        locale: {
                            format: 'YYYY-MM-DD'
                        }
                    })

                    $('#sub-familia').hide(1);
                    $("#pictogramas").show(1);
                    $('#filter').click(function() {
                        $('#familia').val('Familia');
                        $('#sub-familia').val('Sub-Familia');
                        $('#movimento').val('Movimento');
                        $('input[type=checkbox]').prop('checked', false);
                        table.search('');
                        table.draw();
                    });
                    $('#movimento').change(function() {
                        table.draw();
                    });

                    $("#pictogramas").click(function() {
                        $("#modalSelecionarPictograma").modal("show");
                    })

                    $('#familia').change(function() {
                        var familia = $('#familia option:selected').val();
                        console.log("familia selecionada: " + familia);
                        if (familia == "Não") {
                            $('#sub-familia').show(1);
                            $("#pictogramas").hide(1);
                        } else {
                            $('#sub-familia').hide(1);
                            $('#sub-familia').val('Sub-Familia');
                            $("#pictogramas").show(1);
                        }
                        table.draw();
                    });
                    $('#sub-familia').change(function() {
                        table.draw();
                    });

                    $('#intervalo').on('apply.daterangepicker', function() {
                        $.fn.dataTable.ext.search.push(
                            function(settings, searchData, index, rowData, counter) {
                                var inicio = $('#intervalo').data('daterangepicker')
                                    .startDate.format("YYYY-MM-DD");
                                var fim = $('#intervalo').data('daterangepicker').endDate
                                    .format("YYYY-MM-DD");
                                var datas = moment(new Date(searchData[7]),
                                    "YYYY-MM-DD") // using the data from the 8th column
                                console.log('incio = ' + inicio, ', ' + 'fim = ' + fim);
                                console.log(datas);

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
                    });
                }
            });

        });

    </script>
@endsection
