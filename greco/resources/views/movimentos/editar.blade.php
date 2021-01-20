@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/toastr.css"/>

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="">{{ __('lang.movimentos') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.editar') }} {{ __('lang.entrada') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.editar') }} {{ __('lang.entrada') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <!-- form start -->
                        <form method="POST" action="/movimentos/editado/{{$entrada->id}}">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                            <input type="hidden" id="id" name = "id" value="{{$entrada->id}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.produto') }}</label>
                                            <input type="text" class="form-control" id="produto" value="{{ $entrada->produto->designacao }}"
                                                disabled readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="n_embalagem">{{ __('lang.n-embalagem') }}</label>
                                            <input type="text" class="form-control" id="n_embalagem" value="{{ $entrada->id_inventario }} - {{ $entrada->id_ordem }}"
                                                disabled readonly>
                                        </div>
                                    </div>
                                 </div> 

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="referencia">{{ __('lang.referencia') }}</label>
                                            <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia', $entrada->referencia) }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="unidades">{{ __('lang.unidades') }}</label>
                                            <select id="unidades" name="unidades" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option value="{{$entrada->get_unidade->id}}" selected>{{old('unidades', $entrada->get_unidade->unidade)}}</option>
                                            @foreach ($unidades as $u)
                                            @if($u->unidade != $entrada->get_unidade->unidade)
                                                <option value="{{ $u->id }}">{{$u->unidade}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipo_embalagem">{{ __('lang.tipo de embalagem') }}</label>
                                            <select id="tipo_embalagem" name="tipo_embalagem" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option value="{{$entrada->get_tipo_embalagem->id}}" selected>{{old('tipo_embalagem', $entrada->get_tipo_embalagem->nome)}}</option>
                                            @foreach ($tipoembalagem as $te)
                                            @if($te->nome != $entrada->get_tipo_embalagem->nome)
                                                <option value="{{ $te->id }}">{{$te->nome}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cap_embalagem">{{ __('lang.capacidade da embalagem') }}</label>
                                            <input type="number" class="form-control" id="cap_embalagem" name="cap_embalagem" value="{{old('cap_embalagem', $entrada->capacidade)}}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                            <select id="fornecedor" name="fornecedor" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_fornecedor->id}}" selected>{{old('preco', $entrada->get_fornecedor->designacao)}}</option>
                                            @foreach ($fornecedor as $f)
                                            @if($f->designacao != $entrada->get_fornecedor->designacao)
                                                <option value="{{ $f->id }}">{{$f->designacao}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="marca">{{ __('lang.nome da marca') }}</label>
                                            <select id="marca" name="marca" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_marcas->id}}" selected>{{old('marca', $entrada->get_marcas->marca)}}</option>
                                            @foreach ($marca as $m)
                                            @if($m->marca != $entrada->get_marcas->marca)
                                            <option value="{{ $m->id }}">{{$m->marca}}</option>
                                            @endif
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="armario">{{ __('lang.armario') }}</label>
                                            <select id="armario" name="armario" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_armario->id}}" selected>{{old('armario', $entrada->get_armario->armario)}}</option>
                                            @foreach ($armario as $a)
                                            @if($a->armario != $entrada->get_armario->armario)
                                                <option value="{{ $a->id }}">{{$a->armario}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prateleira">{{ __('lang.prataleira') }}</label>
                                            <select id="prateleira" name="prateleira" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_prateleira->id}}" selected>{{old('prateleira', $entrada->get_prateleira->prateleira)}}</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="iva">{{ __('lang.taxa de iva') }}</label>
                                            <div class="input-group">
                                            <select id="iva" name="iva" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option value="{{$entrada->get_iva->id}}" selected>{{old('iva', $entrada->get_iva->nome)}}</option>
                                            @foreach ($iva as $i)
                                            @if($i->nome !=  $entrada->get_iva->nome)
                                                <option value="{{ $i->id }}">{{$i->nome}}</option>
                                                @endif
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="preco">{{ __('lang.preco') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco', $entrada->preco) }}"
                                                    step="0.05">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-euro-sign"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if($entrada->produto->get_fam->nome == "Químico")
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="estado">{{ __('lang.estado fisico') }}</label>
                                            <select id="estado" name="estado" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_estado->id}}" selected>{{old('estado', $entrada->get_estado->estado_fisico)}}</option>
                                            @foreach ($estados as $e)
                                            @if($e->estado_fisico != $entrada->get_estado->estado_fisico)
                                                <option value="{{ $e->id }}">{{$e->estado_fisico}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textura">{{ __('lang.textura/viscosidade') }}</label>
                                            <select id="textura" name="textura" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_textura->id}}" selected>{{old('textura', $entrada->get_textura->textura_viscosidade)}}</option>
                                            @foreach ($texturas_viscosidades as $tv)
                                            @if($tv->textura_viscosidade != $entrada->get_textura->textura_viscosidade)
                                                <option value="{{ $tv->id }}">{{$tv->textura_viscosidade}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cor">Cor</label>
                                            <select id="cor" name="cor" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_cor->id}}" selected>{{old('cor', $entrada->get_cor->cor)}}</option>
                                            @foreach ($cor as $c)
                                            @if($c->cor != $entrada->get_cor->cor)
                                                <option value="{{ $c->id }}">{{$c->cor}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="peso">{{ __('lang.peso bruto') }}</label>
                                            <input type="number" class="form-control" id="peso" name="peso" value="{{ old('peso', $entrada->peso_bruto) }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('lang.data de entrada') }}</label>
                                            <div class="input-group date" id="data_entrada" name="data_entrada" data-target-input="nearest">
                                                <input type="text" id="data_entrada_input" name="data_entrada_input" class="form-control datetimepicker-input"
                                                    data-target="#data_entrada" value="{{old('data_entrada_input', date('d/m/Y', strtotime($entrada->data_entrada)))}}" />
                                                <div class="input-group-append" data-target="#data_entrada"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de abertura') }}</label>
                                            <div class="input-group date" id="data_abertura" name="data_abertura" data-target-input="nearest">
                                                <input type="text" id="data_abertura_input" name="data_abertura_input" class="form-control datetimepicker-input"
                                                    data-target="#data_abertura" value="{{old('data_abertura_input', date('d/m/Y', strtotime($entrada->data_abertura)))}}" />
                                                <div class="input-group-append" data-target="#data_abertura"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de validade') }}</label>
                                            <div class="input-group date" id="data_validade" name="data_validade"  data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input" id="data_validade_input" name="data_validade_input"
                                                    data-target="#data_validade" value="{{old('data_validade_input', date('d/m/Y', strtotime($entrada->data_validade)))}}" />
                                                <div class="input-group-append" data-target="#data_validade"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" name="obvs" class="form-control"
                                        rows="4">{{$entrada->obs}}</textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/movimentos/show_entrada/{{$entrada->id}}" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                                    </div>
                                        <div class="ml-auto col-3">
                                        <button type="submit" class="btn btn-block btn-secondary">{{ __('lang.guardar') }}</button>
                                        </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </div>

    </section>
@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="{{ public_path() }}/plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="{{ public_path() }}/plugins/moment/moment.min.js"></script>
    <script src="{{ public_path() }}/plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="{{ public_path() }}/plugins/moment/locale/pt.js"></script>
    <script src="{{ public_path() }}/plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>
    //validação de datas
    function checkDates(){
            let d1 = $("#data_entrada_input").val().split("/");
            let d1num = d1[2]+d1[1]+d1[0];
            let d2 = $("#data_abertura_input").val().split("/");
            let d2num = d2[2]+d2[1]+d2[0];
            let d3 = $("#data_validade_input").val().split("/");
            let d3num = d3[2]+d3[1]+d3[0];

            if(d1num > d2num){
                $("#data_abertura_input").addClass("border border-danger");
            }else{
                $("#data_abertura_input").removeClass("border border-danger");
            }

            if(d1num > d3num){
                $("#data_validade_input").addClass("border border-danger");
            }else{
                $("#data_validade_input").removeClass("border border-danger");
            }
        }

        $("#data_entrada").on("input", function() {
            $('#data_abertura_input').attr("disabled", false);
            $('#data_validade_input').attr("disabled", false);
            checkDates();
        });

        $("#data_abertura").on("input", function() {
            checkDates();
        });

        $("#data_validade").on("input", function() {
            checkDates();
        });


        $(function() {
            //Initialize Select2 Elements
            // $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

        $("#armario").change(function() {
            $armario = $('#armario').val();
            $.ajax({
                type: 'get',
                url: '/movimentos/entradaPrateleira',
                data: {
                    'armario': $armario,
                },
                success: function (data) {
                    $('#prateleira').attr("disabled", false);
                    $('#prateleira').html(data);
                }
            });
        });

        if('{{ $errors->count() > 0}}') {
                toastr["error"]("Por favor reveja as datas.", "Erro ao editar entrada")
            }else{
                if('{{ Session::get('status')}}'==='ok'){
                    toastr["success"]("Entrada editada com sucesso.", "Entrada editada")
                }
            };

    </script>

@endsection
