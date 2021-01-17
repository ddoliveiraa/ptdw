@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

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
                        <form>
                            <div class="card-body">
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
                                            <input type="text" class="form-control" id="referencia" value="{{ $entrada->referencia }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="unidades">{{ __('lang.unidades') }}</label>
                                            <input type="text" class="form-control" id="unidades" value="{{ $entrada->get_unidade->unidade }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipo_embalagem">{{ __('lang.tipo de embalagem') }}</label>
                                            <input type="text" class="form-control" id="tipo_embalagem" value="{{ $entrada->get_tipo_embalagem->nome }}">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cap_embalagem">{{ __('lang.capacidade da embalagem') }}</label>
                                            <input type="number" class="form-control" id="cap_embalagem" value="{{ $entrada->capacidade }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                            <select id="fornecedor" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_fornecedor->id}}" selected>{{$entrada->get_fornecedor->designacao}}</option>
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
                                            <input type="text" class="form-control" id="marca" value="{{ $entrada->get_marcas->marca }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="armario">{{ __('lang.armario') }}</label>
                                            <select id="armario" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_armario->id}}" selected>{{$entrada->get_armario->armario}}</option>
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
                                            <select id="prateleira" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_prateleira->id}}" selected>{{$entrada->get_prateleira->prateleira}}</option>
                                            @foreach ($prateleira as $p)
                                            @if($p->prateleira != $entrada->get_prateleira->prateleira)
                                                <option value="{{ $p->id }}">{{$p->prateleira}}</option>
                                                @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="iva">{{ __('lang.taxa de iva') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="iva" value="{{ $entrada->get_iva->nome }}">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-percentage"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="preco">{{ __('lang.preco') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="preco" value="{{ $entrada->preco }}"
                                                    step="0.05">
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-euro-sign"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipo_embalagem">{{ __('lang.tipo de embalagem') }}</label>
                                            <select id="tipo_embalagem" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option value="{{$entrada->get_tipo_embalagem->id}}" selected>{{$entrada->get_tipo_embalagem->nome}}</option>
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
                                            <input type="number" class="form-control" id="cap_embalagem" value="250">
                                        </div>
                                    </div>
                                </div>
                                @if($entrada->produto->get_fam->nome == "Químico")
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="estado">{{ __('lang.estado fisico') }}</label>
                                            <select id="estado" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_estado->id}}" selected>{{$entrada->get_estado->estado_fisico}}</option>
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
                                            <select id="textura" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_textura->id}}" selected>{{$entrada->get_textura->textura_viscosidade}}</option>
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
                                            <select id="cor" class="form-control select2bs4" style="width: 100%;">
                                            <option value="{{$entrada->get_cor->id}}" selected>{{$entrada->get_cor->cor}}</option>
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
                                            <input type="number" class="form-control" id="peso" value="{{ $entrada->peso_bruto }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('lang.data de entrada') }}</label>
                                            <div class="input-group date" id="data_entrada" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_entrada" value="{{ $entrada->data_entrada }}" />
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
                                            <div class="input-group date" id="data_abertura" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_abertura" value="{{ $entrada->data_abertura }}" />
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
                                            <div class="input-group date" id="data_validade" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_validade" value="{{ $entrada->data_validade }}" />
                                                <div class="input-group-append" data-target="#data_validade"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de termino') }}</label>
                                            <div class="input-group date" id="data_termino" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_termino" value="{{ $entrada->data_termino }}" />
                                                <div class="input-group-append" data-target="#data_termino"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" class="form-control"
                                        rows="4">👀 Está a observar uma observação muito observavel, escrito por um observador de um observatório muito observente. 👀</textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/movimentos/show" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                                    </div>
                                        <div class="ml-auto col-3">
                                            <a href="{{ public_path() }}/movimentos/show" role="button"
                                                class="btn btn-block btn-secondary">{{ __('lang.guardar') }}</a>
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

    <script>
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

    </script>

@endsection
