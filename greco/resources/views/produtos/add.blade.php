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
                                <form method="POST" action="/produtos_q">
                                    @csrf <!-- Cross Site Request Forgery -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_designacao"
                                                        class="control-label">{{ __('lang.designacao') }}</label>
                                                    <input type="text" class="form-control" name="produto_designacao" id="produto_designacao" tabindex="1"
                                                        required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_sinonimo"
                                                        class="control-label">{{ __('lang.sinonimo') }}</label>
                                                    <input type="text" class="form-control" name="produto_sinonimo" id="produto_sinonimo" tabindex="2">
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_formula"
                                                        class="control-label">{{ __('lang.formula') }}</label>
                                                    <input type="text" class="form-control" name="produto_formula" id="produto_formula" tabindex="3">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_cas" class="control-label">{{ __('lang.n cas') }}</label>
                                                    <input type="text" class="form-control" name="produto_cas" id="produto_cas" tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_peso"
                                                        class="control-label">{{ __('lang.peso molecular') }}</label>
                                                    <input type="text" class="form-control" name="produto_peso" id="produto_peso" tabindex="5" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" name="produto_stock_minimo" id="produto_stock_minimo" tabindex="6"
                                                        required>
                                                </div>
                                            </div>
                                        </div>
        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_condicoes_armazenamento"
                                                        class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                                    <select class="form-control" name="produto_armario" id="produto_armario" tabindex="7">
                                                        @foreach ($condicoes as $c)
                                                        <option value="{{ $c->id }}">{{ $c->condicao }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
        
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_pictogramas"
                                                        class="control-label">{{ __('lang.pictograma') }}</label>
                                                    <div class="input-group margin">
                                                        <input type="text" class="form-control" name="produto_pictogramas" id="produto_pictogramas"
                                                            tabindex="7" readonly>
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
                                                        <input type="checkbox" class="custom-control-input" name="customSwitch1" id="customSwitch1">
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
                                <form method="POST" action="/produtos_nq">
                                    @csrf <!-- Cross Site Request Forgery -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_designacao_nq"
                                                        class="control-label">{{ __('lang.designacao') }}</label>
                                                    <input type="text" class="form-control" name="produto_designacao_nq" id="produto_designacao_nq"
                                                        tabindex="1" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_foto"
                                                        class="control-label">{{ __('lang.foto') }}</label>
                                                    <input type="file" class="form-control" name="produto_foto" id="produto_foto" tabindex="2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_subfamilia_nq"
                                                        class="control-label">{{ __('lang.familia') }}</label>
                                                    <select class="form-control" name="produto_subfamilia_nq" id="produto_subfamilia_nq" tabindex="3">
                                                        @foreach ($subfamilias as $sf)
                                                        <option value="{{ $sf->id }}">{{ $sf->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_stock_minimo_nq"
                                                        class="control-label">{{ __('lang.stock minimo') }}</label>
                                                    <input type="text" class="form-control" name="produto_stock_minimo_nq" id="produto_stock_minimo_nq"
                                                        tabindex="4" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer">
                                        <div class="row justify-content-end">
                                            <div class="col-md-3">
                                                <button type="submit"
                                                    id="guardar" class="btn btn-block btn-secondary">{{ __('lang.guardar') }}</button>
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
                    <form method="POST" action="/produtos_q">
                         @csrf <!-- Cross Site Request Forgery -->
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check-pictogram">
                                            <ul>
                                                @foreach ($pictogramas as $p)
                                                    <li>
                                                        <input type="checkbox" name="picto" id="cb{{ $p->id }}" value="{{ $p->nome }}" />
                                                        <label for="cb{{ $p->id }}"><img src="{{ $p->imagem }}" /><p class="text-center">{{ $p->nome }}</p></label>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('lang.recomendacoes de prudencia') }}</label>
                                        <select id="recomendacoes" class="select2" multiple="multiple"
                                            data-placeholder="{{ __('lang.recomendacoes de prudencia') }}"
                                            id="produto_cod_recomendacoes_prudencia" tabindex="9" style="width: 100%;">
                                            @foreach ($recomendacoes as $r)
                                                    <option value="{{ $r->id }}">{{ $r->texto }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ __('lang.advertencias de perigo') }}</label>
                                        <select id="advertencias" class="select2" multiple="multiple"
                                        data-placeholder="{{ __('lang.advertencias de perigo') }}" style="width: 100%;"
                                        id="produto_cod_advertencias_perigo"
                                        tabindex="10" required>
                                            @foreach ($advertencias as $a)
                                                    <option value="{{ $a->id }}">{{ $a->texto }}</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                            id="cancelar" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3"
                            id="selecionar" tabindex="14">{{ __('lang.selecionar') }}</button>
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

    
            $('#guardar').on('click', function() {

                $.ajax({
                    url: '/produtos_q',
                    type: "Get",
                    dataType: 'json',//this will expect a json response
                    data:{pictograma:$('#produto_pictogramas').val()}, 
                    success: function(response){ 
                            $('#produto_pictogramas').val();
                        }
                });
            });

            $("#cancelar").bind("click", function () {
                $('#modalSelecionarPictograma').find('form').trigger('reset');
                $("#recomendacoes").val(null).trigger('change');
                $("#advertencias").val(null).trigger('change');
            });

            $(document).on('click', '#selecionar', function(){
                let pictogramas = [];
                $.each($("input[name='picto']:checked"), function(){
                    pictogramas.push($(this).val());
                });

                $('#produto_pictogramas').val(pictogramas);

            });

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
