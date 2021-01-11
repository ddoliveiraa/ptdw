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
                                <option value="Químico">{{ __('lang.quimicos') }}</option>
                                <option value="Não Químico">{{ __('lang.nao quimicos') }}</option>
                            </select>
                            <select id="sub-familia" class="col-md-12 form-control select" style="display: none;">
                                <option value="Sub-Familia">{{ __('lang.sub-familia') }}</option>
                                @foreach ($subfamilias as $subfamilia)
                                    <option value="{{ $subfamilia->nome }}">{{ $subfamilia->nome }}</option>
                                @endforeach
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
                <ul class="nav nav-tabs" id="addProdutosTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="entrada-tab" data-toggle="tab" href="#entrada" role="tab"
                            aria-controls="entrada" aria-selected="true">{{ __('lang.entrada') }}s</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="saida-tab" data-toggle="tab" href="#saida" role="tab" aria-controls="saida"
                            aria-selected="false"> {{ __('lang.saida') }}s</a>
                    </li>
                </ul>
                <!-- tab-content -->
                <div class="tab-content" id="MovimentosTabs">
                    <div class="tab-pane fade show active" id="entrada" role="tabpanel" aria-labelledby="entrada-tab">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="entradas" class="table table-bordered table-striped">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th>{{ __('lang.produto') }}</th>
                                            <th>{{ __('lang.n-embalagem') }}</th>
                                            <th>{{ __('lang.localização') }}</th>
                                            <th>{{ __('lang.embalagem') }}</th>
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
                                    {{-- <tbody>
                                        @foreach ($entradas as $entrada)
                                            <tr>
                                                <td>{{ $entrada->produto->designacao }}</td>
                                                <td>Entrada</td>
                                                <td>{{ $entrada->id_inventario }} - {{ $entrada->id_ordem }}</td>
                                                <td>S{{ $entrada->sala }} - {{ $entrada->get_armario->armario }} -
                                                    {{ $entrada->get_prateleira->prateleira }}
                                                </td>
                                                <td>{{ $entrada->capacidade }} {{ $entrada->get_unidade->unidade }}</td>
                                                <td></td>
                                                <td>{{ $entrada->get_fornecedor->designacao }}</td>
                                                <td>{{ $entrada->data_entrada }}</td>
                                                <td>{{ $entrada->validade }}</td>
                                                <td>{{ $entrada->termino }}</td>
                                                <td>{{ $entrada->get_operador->nome }}</td>
                                                <td>{{ $entrada->produto->get_fam->nome }}</td>
                                                <td>{{ $entrada->produto->get_subfam->nome }}</td>
                                                <td><a href="{{ public_path() }}/movimentos/show_saida"> Ver Mais &nbsp<i
                                                            class="fa fa-arrow-right"></i></a></td>
                                            </tr>
                                        @endforeach

                                        @foreach ($saidas as $saida)
                                            <tr>
                                                <td>{{ $saida->produto->designacao }}</td>
                                                <td>Saida</td>
                                                <td>{{ $saida->id_produto }} - {{ $saida->id_ordem }}</td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $saida->get_cliente->designacao }}</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td>{{ $saida->get_operador->nome }}</td>
                                                <td>{{ $saida->produto->get_fam->nome }}</td>
                                                <td>{{ $entrada->produto->get_subfam->nome }}</td>
                                                <td><a href="{{ public_path() }}/movimentos/show_saida"> Ver Mais &nbsp<i
                                                            class="fa fa-arrow-right"></i></a></td>
                                            </tr>
                                        @endforeach

                                    </tbody> --}}
                                </table>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="saida" role="tabpanel" aria-labelledby="saida-tab">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="saidas" class="table table-bordered table-striped">
                                    <thead class="bg-dark">
                                        <tr>
                                            <th>{{ __('lang.produto') }}</th>
                                            <th>{{ __('lang.n-embalagem') }}</th>
                                            <th>{{ __('lang.cliente') }}</th>
                                            <th>{{ __('lang.solicitante') }}</th>
                                            <th>{{ __('lang.operador') }}</th>
                                            <th>Data</th>
                                            <th>{{ __('lang.familia') }}</th>
                                            <th>{{ __('lang.sub-familia') }}</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
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
    <script src="{{ public_path() }}/dist/js/grupo-scripts/movimento_historico.js"></script>
@endsection
