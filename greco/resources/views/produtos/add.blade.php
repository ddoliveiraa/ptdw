@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/produtos">{{ __('lang.produtos') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('lang.novo') }} {{ __('lang.produto') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.novo') }} {{ __('lang.produto') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <ul class="nav nav-tabs" id="addProdutosTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="quimico-tab" data-toggle="tab" href="#quimico" role="tab"
                                aria-controls="quimico" aria-selected="true">{{ __('lang.quimicos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="n_quimico-tab" data-toggle="tab" href="#n_quimico" role="tab"
                                aria-controls="n_quimico" aria-selected="false"> {{ __('lang.nao quimicos') }}</a>
                        </li>
                    </ul>

                    <!-- tab-content -->
                    <div class="tab-content" id="addProdutosTabContent">
                        <div class="tab-pane fade show active" id="quimico" role="tabpanel" aria-labelledby="quimico-tab">
                            <div class="card card-primary">

                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_designacao"
                                                        class="control-label">{{ __('lang.designacao') }}</label>
                                                    <input type="text" class="form-control" id="produto_designacao" tabindex="1"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_sinonimo"
                                                        class="control-label">{{ __('lang.sinonimo') }}</label>
                                                    <input type="text" class="form-control" id="produto_sinonimo" tabindex="2">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_formula"
                                                        class="control-label">{{ __('lang.formula') }}</label>
                                                    <input type="text" class="form-control" id="produto_formula" tabindex="3">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_cas" class="control-label">{{ __('lang.n cas') }}</label>
                                                    <input type="text" class="form-control" id="produto_cas" tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_peso"
                                                        class="control-label">{{ __('lang.peso molecular') }}</label>
                                                    <input type="text" class="form-control" id="produto_peso" tabindex="5" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_minimo" tabindex="6"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_condicoes_armazenamento"
                                                        class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                                    <select class="form-control" id="produto_armario" tabindex="7">
                                                        <option value="1">{{ __('lang.TMBaixo') }}</option>
                                                        <option value="2">{{ __('lang.TBaixo') }}</option>
                                                        <option value="3">{{ __('lang.TAmbiente') }}</option>
                                                        <option value="4">{{ __('lang.TAlta') }}</option>
                                                        <option value="5">{{ __('lang.TMAlta') }}</option>
                                                    </select>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_pictogramas"
                                                        class="control-label">{{ __('lang.pictograma') }}</label>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control" id="produto_pictogramas"
                                                            tabindex="7" required readonly>
                                                        <span class="input-group-btn">
                                                            <button type="button" class="btn btn-secondary btn-flat"
                                                                data-toggle="modal"
                                                                data-target="#modalSelecionarPictograma">{{ __('lang.selecionar') }}</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <div class="custom-control custom-switch">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                                        <label class="custom-control-label"
                                                            for="customSwitch1">{{ __('lang.armario ventilado') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="card-footer">
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                                <button type="submit"
                                                    class="btn btn-block btn-secondary">{{ __('lang.guardar') }}</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane fade" id="n_quimico" role="tabpanel" aria-labelledby="n_quimico-tab">
                            <div class="card card-primary">

                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_designacao_nq"
                                                        class="control-label">{{ __('lang.designacao') }}</label>
                                                    <input type="text" class="form-control" id="produto_designacao_nq"
                                                        tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_foto"
                                                        class="control-label">{{ __('lang.foto') }}</label>
                                                    <input type="file" class="form-control" id="produto_foto" tabindex="2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_familia_nq"
                                                        class="control-label">{{ __('lang.familia') }}</label>
                                                    <select class="form-control" id="produto_familia_nq" tabindex="3">
                                                        <option value="1">Familia 1</option>
                                                        <option value="2">Familia 2</option>
                                                        <option value="3">Familia 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo_nq"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_minimo_nq"
                                                        tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                                <button type="submit"
                                                    class="btn btn-block btn-secondary">{{ __('lang.guardar') }}</button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <!-- /.tab-pane -->

                    </div>
                    <!-- /.tab-content -->

                </div>
            </div>
            <!-- /.card -->
        </div>


        <!-- Modal Selecionar Pictograma-->
        <div class="modal fade" id="modalSelecionarPictograma" data-backdrop="static">

            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.pictograma') }}</h4>
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
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Explosive.gif" /><p class="text-center">GHS01</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb2" />
                                                    <label for="cb2"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Flammable.gif" /><p class="text-center">GHS02</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb3" />
                                                    <label for="cb3"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/RoundFlammable.gif" /><p class="text-center">GHS03</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb4" />
                                                    <label for="cb4"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/CompressedGas.gif" /><p class="text-center">GHS04</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb5" />
                                                    <label for="cb5"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Corrosive.gif" /><p class="text-center">GHS05</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb6" />
                                                    <label for="cb6"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Toxic.gif" /><p class="text-center">GHS06</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb7" />
                                                    <label for="cb7"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Danger.gif" /><p class="text-center">GHS07</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb8" />
                                                    <label for="cb8"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Systemic.gif" /><p class="text-center">GHS08</p></label>
                                                </li>
                                                <li>
                                                    <input type="checkbox" id="cb9" />
                                                    <label for="cb9"><img
                                                            src="{{ public_path() }}/dist/img/Pictogramas/Pollution.gif" /><p class="text-center">GHS09</p></label>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('lang.recomendacoes de prudencia') }}</label>
                                        <select class="select2" multiple="multiple"
                                            data-placeholder="{{ __('lang.recomendacoes de prudencia') }}"
                                            id="produto_cod_recomendacoes_prudencia" tabindex="9" style="width: 100%;">
                                            <option>H200</option>
                                            <option>H201</option>
                                            <option>H203</option>
                                            <option>H204</option>
                                            <option>H205</option>
                                            <option>H206</option>
                                            <option>H207</option>
                                            <option>H208</option>
                                            <option>H220</option>
                                            <option>H221</option>
                                            <option>H290</option>
                                            <option>H314</option>
                                            <option>H335</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('lang.advertencias de perigo') }}</label>
                                        <select class="select2" multiple="multiple"
                                        data-placeholder="{{ __('lang.advertencias de perigo') }}" style="width: 100%;"
                                        id="produto_cod_advertencias_perigo"
                                        tabindex="10" required>
                                            <option>P101</option>
                                            <option>P102</option>
                                            <option>P103</option>
                                            <option>P201</option>
                                            <option>P202</option>
                                            <option>P210</option>
                                            <option>P211</option>
                                            <option>P220</option>
                                            <option>H220</option>
                                            <option>H221</option>
                                            <option>P260</option>
                                            <option>P280</option>
                                            <option>P303</option>
                                            <option>+361</option>
                                            <option>+353</option>
                                            <option>P305</option>
                                            <option>+351</option>
                                            <option>+338</option>
                                        </select>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                                tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal"
                                tabindex="14">{{ __('lang.selecionar') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>


    </section>
@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="{{ public_path() }}/plugins/select2/js/select2.full.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
        $('input[type=checkbox]').on('change', function(e) {
            if ($('input[type=checkbox]:checked').length > 4) {
                $(this).prop('checked', false);
            }
        });

    </script>

@endsection
