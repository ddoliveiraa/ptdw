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
                <h2 class="text-center display-4">{{ __('lang.historico') }}</h2>
            </div>



        </div><!-- /.container-fluid -->
</section>


<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2">
                <div class="float-right">
                    <div class="form-group" style="display: inline-block;">
                        <label for="historico">{{ __('intervalo') }}</label>
                        <div class="input-group date" id="data_validade" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#intervalo"
                                placeholder="DD/MM/YYYY" />
                            <div class="input-group-append" data-target="#intervalo" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group" style="display: inline-block;">
                        <label for="intervalo2">{{ __('ate') }}</label>
                        <div class="input-group date" id="intervalo2" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input" data-target="#intervalo2"
                                placeholder="DD/MM/YYYY" />
                            <div class="input-group-append" data-target="#intervalo2" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                                <td>...</td>
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
                                <td>...</td>
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
                                <td>...</td>
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
                                <td>...</td>
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

    <!-- Modal -->
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
    $(function () {
        $("#historico").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#historico_wrapper .col-md-6:eq(0)');

        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var escolha = $('#escolha option:selected').val();
                var escolhas = searchData[7]; // using the data from the 7th column
                console.log(escolha.localeCompare(escolhas))

                if (escolha == escolhas) {
                    return escolhas;
                } else if (escolha == "Entradas e Saídas") {
                    return true;
                }
                return false;
            }
        );

        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var inicio = $('#inicio').val();
                var fim = $('#fim').val();
                var datas = searchData[6]; // using the data from the 6th column

                if ((isNaN(inicio) && isNaN(fim)) ||
                    (isNaN(inicio) && datas <= fim) ||
                    (inicio <= datas && isNaN(fim)) ||
                    (inicio <= datas && datas <= fim)) {
                    return true;
                }
                return false;
            }
        );

        var selects = $("<select></select>").attr('id', 'escolha');
        selects.addClass('custom-select .form-control-sm');
        $('#historico_filter').append(selects);
        $('#escolha').append(new Option("{{ __('lang.entradas e saidas') }}",
            "Entradas e Saídas"));
        $('#escolha').append(new Option("{{ __('lang.entrada') }}", "Entrada"));
        $('#escolha').append(new Option("{{ __('lang.saida') }}", "Saída"));


        $(document).ready(function () {
            var table = $('#historico').DataTable();
            // Event listener to the two range filtering inputs to redraw on input
            $('#escolha').change(function () {
                table.draw();
            });
            $('#inicio, #fim').keyup(function () {
                table.draw();
            });
            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        });
    });

</script>
@endsection
