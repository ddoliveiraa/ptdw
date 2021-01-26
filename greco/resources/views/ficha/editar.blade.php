@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/toastr.css"/>

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
                        <li class="breadcrumb-item active">{{$produtos->designacao}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.editar') }} {{ __('lang.ficha do produto') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-8 offset-md-2">
                    <div class="card card-primary">
                    <form method="POST" action="{{ public_path() }}/editar/produtos_q/{{$produtos->id}}">
                        @csrf
                        @method('PUT')         
                            <div class="card-body">
                            <input type="hidden" id="id" name = "id" value="{{$produtos->id}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_designacao"
                                                class="control-label">{{ __('lang.designacao') }}</label>
                                            <input type="text" class="form-control"  id="produto_designacao" name="produto_designacao" tabindex="1"
                                             value="{{ old('produto_designacao', $produtos->designacao)}}">
                                        </div>
                                    </div>

                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_formula"
                                                class="control-label">{{ __('lang.formula') }}</label>
                                            <input type="text" class="form-control" id="produto_formula" name="produto_formula" tabindex="3"
                                            value="{{ old('produto_formula', $produtos->formula) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_cas" class="control-label">{{ __('lang.n cas') }}</label>
                                            <input type="text" class="form-control" id="produto_cas" name="produto_cas" tabindex="4" 
                                             value="{{ old('produto_cas', $produtos->CAS) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_peso"
                                                class="control-label">{{ __('lang.peso molecular') }}</label>
                                            <input type="text" class="form-control" id="produto_peso" name="produto_peso" tabindex="5"
                                              value="{{ old('produto_peso', $produtos->peso_molecular) }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_stock_minimo"
                                                class="control-label">{{ __('lang.stock minimo') }}</label>
                                            <input type="text" class="form-control" id="produto_stock_minimo" name="produto_stock_minimo" tabindex="6"
                                              value="{{ old('produto_stock_minimo', $produtos->stock_min) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        
                                            <label for="produto_condicoes_armazenamento"
                                                class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                                 
                                            <select class="form-control" id="produto_armazenamento" name="produto_armazenamento" tabindex="7">
                                            @foreach ($condicoes as $c)
                                                @if(old('produto_armazenamento') == $c->id)
                                                    <option value="{{ $c->id }}" selected>{{ $c->condicao }}</option>
                                                @else
                                                    <option value="{{ $c->id }}">{{ $c->condicao }}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                        
                                            <label for="produto_pictogramas"
                                                class="control-label load">{{ __('lang.pictograma') }}</label>
                                            <div class="input-group margin">
                                                <input type="text" class="form-control" name="produto_pictogramas" id="produto_pictogramas"
                                                   required tabindex="7" @foreach($produtos->pictogramas as $pic) required value="{{old('produto_pictogramas', $pic->codigo)}}" @endforeach readonly >
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat"
                                                        data-toggle="modal"
                                                        data-target="#modalSelecionarPictograma" tabindex="9" id="selecionar">{{ __('lang.selecionar') }}</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <div class="custom-control custom-switch">
                                                <input type="checkbox" @if($produtos->ventilado == true) checked data-toggle="toggle"  @endif class="custom-control-input" id="customSwitch1" name="customSwitch1" tabindex="10">
                                                <label class="custom-control-label"
                                                    for="customSwitch1" value="{{old('customSwitch1', $produtos->ventilado) }}">{{ __('lang.armario ventilado') }}</label>
                                            </div>
                                        </div>
                                       
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/ficha/{{$produtos->id}}" role="button"
                                            class="btn btn-block btn-default" tabindex="11">{{ __('lang.cancelar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                                <input id="ids_pictogramas" name="ids_pictogramas" type="hidden">
                                                <input id="ids_recomendacoes" name="ids_recomendacoes" type="hidden">
                                                <input id="ids_advertencias" name="ids_advertencias" type="hidden">
                                        <button id="guardar" type="submit"
                                            class="btn btn-block btn-secondary" tabindex="12">{{ __('lang.guardar') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
                    <form method="POST" action="{{ public_path() }}/editar/produtos_q/{{$produtos->id}}">
                         @csrf <!-- Cross Site Request Forgery -->
                         @method('PUT')   
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="check-pictogram">
                                            <ul>
                                                @foreach ($pictogramas as $p)
                                                    <li>
                                                        <input type="checkbox" name="picto" id="cb{{ $p->id }}" value="{{ $p->nome }}" @foreach($produtos->pictogramas as $pic) @if($pic->id == $p->id)
                                                        checked @endif @endforeach required/>
                                                        <label for="cb{{ $p->id }}"><img src="{{ public_path() }}{{ $p->imagem }}" /><p class="text-center">{{ $p->codigo }}</p></label>
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
                                            <option value="{{ $r->id }}" @foreach($produtos->recomendacoes as $rec) @if($rec->id == $r->id) selected @endif @endforeach>{{ $r->texto }} required</option>
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
                                            <option value="{{ $a->id }}" @foreach($produtos->advertencias as $adv) @if($adv->id == $a->id) selected @endif @endforeach>{{ $a->texto }} required</option>
                                            @endforeach
                                        </select>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                            id="cancelar" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal"
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

    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>
let pictogramas = [];
                let ids_pictogramas = [];
                $.each($("input[name='picto']:checked"), function(){
                    pictogramas.push(" "+$(this).val().split(":",1));
                    ids_pictogramas.push(this.getAttribute('id').match(/\d+/g));
                });

                //pictogramas
                $('#produto_pictogramas').val(pictogramas);
                $('#ids_pictogramas').val(ids_pictogramas);

                //recomendacoes e advertencias
                $('#ids_recomendacoes').val($('#recomendacoes').val());
                $('#ids_advertencias').val($('#advertencias').val());


        $(function() {
            if('{{ $errors->count() > 0}}') {
                toastr["error"]("Por favor reveja os campos.", "Erro ao editar produto")
            }
            

         $('#guardar').on('click', function() {

        $.ajax({
            url: '{{ public_path() }}/editar/produtos_q/{{$produtos->id}}',
            type: "Get",
            dataType: 'json', //this will expect a json response
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
        $('#produto_pictogramas').val("");
        });

        $(".close").bind("click", function () {
        $('#modalSelecionarPictograma').find('form').trigger('reset');
        // $("#recomendacoes").val(null).trigger('change');
        // $("#advertencias").val(null).trigger('change');
        // $('#produto_pictogramas').val("");
        });

        $(document).on('click', '#selecionar', function(){
                let pictogramas = [];
                let ids_pictogramas = [];
                $.each($("input[name='picto']:checked"), function(){
                    pictogramas.push(" "+$(this).val().split(":",1));
                    ids_pictogramas.push(this.getAttribute('id').match(/\d+/g));
                });

                //pictogramas
                $('#produto_pictogramas').val(pictogramas);
                $('#ids_pictogramas').val(ids_pictogramas);

                //recomendacoes e advertencias
                $('#ids_recomendacoes').val($('#recomendacoes').val());
                $('#ids_advertencias').val($('#advertencias').val());
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
