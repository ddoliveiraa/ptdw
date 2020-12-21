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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/produtos">{{ __('lang.produtos') }}</a></li>
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
                                                    <input type="text" class="form-control" id="produto_designacao"
                                                        tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_formula"
                                                        class="control-label">{{ __('lang.formula') }}</label>
                                                    <input type="text" class="form-control" id="produto_formula"
                                                        tabindex="2" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_peso"
                                                        class="control-label">{{ __('lang.peso molecular') }}</label>
                                                    <input type="text" class="form-control" id="produto_peso" tabindex="3"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_cas"
                                                        class="control-label">{{ __('lang.n cas') }}</label>
                                                    <input type="text" class="form-control" id="produto_cas" tabindex="4"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_condicoes_armazenamento"
                                                        class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                                    <input type="text" class="form-control"
                                                        id="produto_condicoes_armazenamento" tabindex="5" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_armario"
                                                        class="control-label">{{ __('lang.armario ventilado') }}</label>
                                                    <select class="form-control" id="produto_armario" tabindex="6">
                                                        <option value="1">{{ __('lang.sim') }}</option>
                                                        <option value="2">{{ __('lang.nao') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
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
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_unidades"
                                                        class="control-label">{{ __('lang.unidades') }}</label>
                                                    <input type="text" class="form-control" id="produto_unidades"
                                                        tabindex="8" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_existente"
                                                        class="control-label">{{ __('lang.stock existente') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_existente"
                                                        tabindex="11" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_minimo"
                                                        tabindex="12" required>
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
                                                    <input type="file" class="form-control" id="produto_foto"
                                                        tabindex="1">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_unidades_nq"
                                                        class="control-label">{{ __('lang.unidades') }}</label>
                                                    <input type="text" class="form-control" id="produto_unidades_nq"
                                                        tabindex="8" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_familia_nq"
                                                        class="control-label">{{ __('lang.familia') }}</label>
                                                    <input type="text" class="form-control" id="produto_familia_nq"
                                                        tabindex="8" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_existente_nq"
                                                        class="control-label">{{ __('lang.stock existente') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_existente_nq"
                                                        tabindex="11" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo_nq"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" id="produto_stock_minimo_nq"
                                                        tabindex="12" required>
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

            <div class="modal-dialog">
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
                                        <div class="picto-group">
                                            <label for="pictograma"
                                                class="control-label">{{ __('lang.pictograma') }}</label>

                                            <select class="image-picker" data-limit="3" multiple="multiple"
                                                name="pictograma" id="imagem_pictograma" required>
                                                <option data-img-class="picto"
                                                    data-img-src="{{ public_path() }}/dist/img/Pictogramas/Corrosive.png"
                                                    value="1">Corrosive</option>
                                                <option data-img-class="picto"
                                                    data-img-src="{{ public_path() }}/dist/img/Pictogramas/Harmful.png"
                                                    value="2">Harmful</option>
                                                <option data-img-class="picto"
                                                    data-img-src="{{ public_path() }}/dist/img/Pictogramas/Corrosive.png"
                                                    value="3">Corrosive</option>
                                                <option data-img-class="picto"
                                                    data-img-src="{{ public_path() }}/dist/img/Pictogramas/Harmful.png"
                                                    value="4">Harmful</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="produto_cod_recomendacoes_prudencia"
                                            class="control-label">{{ __('lang.recomendacoes de prudencia') }}</label>
                                        <input type="text" class="form-control" id="produto_cod_recomendacoes_prudencia"
                                            tabindex="9" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="produto_cod_advertencias_perigo"
                                            class="control-label">{{ __('lang.advertencias de perigo') }}</label>
                                        <input type="text" class="form-control" id="produto_cod_advertencias_perigo"
                                            tabindex="10" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                                tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal"
                                tabindex="14">{{ __('lang.adicionar') }}</button>
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

    </script>

@endsection
