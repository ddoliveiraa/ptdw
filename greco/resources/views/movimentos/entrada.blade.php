@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">


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
                        <li class="breadcrumb-item active">{{ __('lang.registar entrada') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.registar entrada') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <!-- general form elements -->

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="quimico-tab" data-toggle="tab" href="#quimico" role="tab"
                                aria-controls="quimico" aria-selected="true">{{ __('lang.quimicos') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="n_quimico-tab" data-toggle="tab" href="#n_quimico" role="tab"
                                aria-controls="n_quimico" aria-selected="false"> {{ __('lang.nao quimicos') }}</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="quimico" role="tabpanel" aria-labelledby="quimico-tab">
                            <div class="card card-primary">
                                <!-- form start -->
                                <form method="POST" action="/movimentos/add/entrada_quimico">
                                    @csrf <!-- Cross Site Request Forgery -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto">{{ __('lang.produto') }}</label>
                                                    <select id="produto" name="produto" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.produto') }}
                                                        </option>
                                                        @foreach ($produtos as $p)
                                                            <option value="{{  $p->id }}">{{ $p->designacao }}</option>
                                                        @endforeach
                                                    
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="n_embalagem">{{ __('lang.n-embalagem') }}</label>
                                                    <input type="text" class="form-control" id="n_embalagem" name="n_embalagem" value="230-12"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="referencia">{{ __('lang.referencia') }}</label>
                                                    <input type="text" class="form-control" id="referencia" name="referencia"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.referencia') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unidades">{{ __('lang.unidades') }}</label>
                                                    <select id="unidades" name="unidades" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecionar') }}
                                                            {{ __('lang.unidades') }}
                                                        </option>
                                                        @foreach ($unidades as $u)
                                                            <option value="{{  $u->id }}">{{ $u->unidade }}</option>
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
                                                        <option value="" selected disabled>{{ __('lang.insira o') }}
                                                            {{ __('lang.tipo de embalagem') }}
                                                        </option>
                                                        @foreach ($tipoembalagem as $te)
                                                            <option value="{{  $te->id }}">{{ $te->nome }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="cap_embalagem">{{ __('lang.capacidade da embalagem') }}</label>
                                                    <input type="number" class="form-control" id="cap_embalagem" name="cap_embalagem" min="1"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.capacidade da embalagem') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                                    <select id="fornecedor" name="fornecedor" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.fornecedor') }}
                                                        </option>
                                                        @foreach ($fornecedores as $f)
                                                            <option value="{{  $f->id }}">{{ $f->designacao }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="marca">{{ __('lang.nome da marca') }}</label>
                                                    <select id="marca" name="marca" class="form-control select2bs4" style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.nome da marca') }}
                                                        </option>
                                                        @foreach ($marcas as $m)
                                                            <option value="{{  $m->id }}">{{ $m->marca }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="armario">{{ __('lang.armario') }}</label>
                                                    <select id="armario" name="armario" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.armario') }}
                                                        </option>
                                                        @foreach ($armarios as $a)
                                                            <option value="{{  $a->id }}">{{ $a->armario }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prateleira">{{ __('lang.prataleira') }}</label>
                                                    <select id="prateleira" name="prateleira" class="form-control select2bs4"
                                                        style="width: 100%;" disabled>
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.prataleira') }}
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="iva">{{ __('lang.taxa de iva') }}</label>
                                                    <select id="iva" name="iva" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.taxa de iva') }}
                                                        </option>
                                                        @foreach ($ivas as $i)
                                                            <option value="{{  $i->id }}">{{ $i->nome*100 }}%</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="preco">{{ __('lang.preco') }}</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="preco" name="preco"
                                                            placeholder="{{ __('lang.insira o') }} {{ __('lang.preco') }}"
                                                            step="0.05" min="0.05">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fa fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="estado">{{ __('lang.estado fisico') }}</label>
                                                    <select id="estado" name="estado" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.estado fisico') }}
                                                        </option>
                                                        @foreach ($estados as $e)
                                                            <option value="{{  $e->id }}">{{ $e->estado_fisico }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="textura">{{ __('lang.textura/viscosidade') }}</label>
                                                    <select id="textura" name="textura" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.textura/viscosidade') }}
                                                        </option>
                                                        @foreach ($texturas_viscosidades as $tv)
                                                            <option value="{{  $tv->id }}">{{ $tv->textura_viscosidade }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cor">Cor</label>
                                                    <select id="cor" name="cor" class="form-control select2bs4" style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.cor') }}
                                                        </option>
                                                        @foreach ($cores as $c)
                                                            <option value="{{  $c->id }}">{{ $c->cor }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="peso">{{ __('lang.peso bruto') }}</label>
                                                    <input type="number" class="form-control" id="peso" name="peso" min="1"
                                                        placeholder="{{ __('lang.insira o') }} {{ __('lang.peso bruto') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>{{ __('lang.data de entrada') }}</label>
                                                    <div class="input-group date" id="data_entrada" name="data_entrada"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            id="data_entrada_input" name="data_entrada_input"
                                                            data-target="#data_entrada" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_entrada"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto">{{ __('lang.data de abertura') }}</label>
                                                    <div class="input-group date" id="data_abertura" name="data_abertura"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            id="data_abertura_input" name="data_abertura_input"
                                                            data-target="#data_abertura" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_abertura"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto">{{ __('lang.data de validade') }}</label>
                                                    <div class="input-group date" id="data_validade" name="data_validade"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            id="data_validade_input" name="data_validade_input"
                                                            data-target="#data_validade" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_validade"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto">{{ __('lang.data de termino') }}</label>
                                                    <div class="input-group date" id="data_termino" name="data_termino"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            id="data_termino_input" name="data_termino_input"
                                                            data-target="#data_termino" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_termino"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="obvs">{{ __('lang.observacoes') }}</label>
                                            <textarea id="obvs" name="obvs" class="form-control" rows="4"></textarea>
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
                        <div class="tab-pane fade" id="n_quimico" role="tabpanel" aria-labelledby="n_quimico-tab">

                            <div class="card card-primary">
                                <!-- form start -->

                                <form>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_nq">{{ __('lang.produto') }}</label>
                                                    <select id="produto_nq" name="produto_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.produto') }}
                                                        </option>
                                                        <option>Luvas</option>
                                                        <option>Caixa de Petri</option>
                                                        <option>Pipeta</option>
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="n_embalagem_nq">{{ __('lang.n-embalagem') }}</label>
                                                    <input type="text" class="form-control" id="n_embalagem_nq" name="n_embalagem_nq" value="230-12"
                                                        disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="referencia_nq">{{ __('lang.referencia') }}</label>
                                                    <input type="text" class="form-control" id="referencia_nq" name="referencia_nq"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.referencia') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unidades_nq">{{ __('lang.unidades') }}</label>
                                                    <select id="unidades_nq" name="unidades_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecionar') }}
                                                            {{ __('lang.unidades') }}
                                                        </option>
                                                        <option>mililitros</option>
                                                        <option>gramas</option>
                                                        <option>outro?</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="tipo_embalagem_nq">{{ __('lang.tipo de embalagem') }}</label>
                                                    <select id="tipo_embalagem_nq" name="tipo_embalagem_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.insira o') }}
                                                            {{ __('lang.tipo de embalagem') }}
                                                        </option>
                                                        <option>Frasco</option>
                                                        <option>Vidro</option>
                                                        <option>Caixa</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="cap_embalagem_nq">{{ __('lang.capacidade da embalagem') }}</label>
                                                    <input type="number" class="form-control" id="cap_embalagem_nq" name="cap_embalagem_nq"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.capacidade da embalagem') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fornecedor_nq">{{ __('lang.fornecedor') }}</label>
                                                    <select id="fornecedor_nq" name="fornecedor_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.fornecedor') }}
                                                        </option>
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="marca_nq">{{ __('lang.nome da marca') }}</label>
                                                    <select id="marca_nq" name="marca_nq" class="form-control select2bs4" style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.nome da marca') }}
                                                        </option>
                                                        <option>Alabama</option>
                                                        <option>Alaska</option>
                                                        <option>California</option>
                                                        <option>Delaware</option>
                                                        <option>Tennessee</option>
                                                        <option>Texas</option>
                                                        <option>Washington</option>
                                                    </select>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="armario_nq">{{ __('lang.armario') }}</label>
                                                    <select id="armario_nq" name="armario_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.armario') }}
                                                        </option>
                                                        <option>Armário 1</option>
                                                        <option>Armário 2</option>~
                                                        <option>Armário 3</option>
                                                        <option>Frigorífico 1</option>
                                                        <option>Frigorífico 2</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prateleira_nq">{{ __('lang.prataleira') }}</label>
                                                    <select id="prateleira_nq" name="prateleira_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.prataleira') }}
                                                        </option>
                                                        <option>Prateleira 1</option>
                                                        <option>Prateleira 2</option>~
                                                        <option>Prateleira 3</option>
                                                        <option>Gaveta 1</option>
                                                        <option>Gaveta 2</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="iva_nq">{{ __('lang.taxa de iva') }}</label>
                                                    <select id="iva_nq" name="iva_nq" class="form-control select2bs4"
                                                    style="width: 100%;">
                                                    <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                        {{ __('lang.taxa de iva') }}
                                                    </option>
                                                    <option>0,13%</option>
                                                    <option>0,06%</option>~
                                                    <option>0,23%</option>
                                                    <option>0,30%</option>
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="preco_nq">{{ __('lang.preco') }}</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="preco_nq" name="preco_nq"
                                                            placeholder="{{ __('lang.insira o') }} {{ __('lang.preco') }}"
                                                            step="0.05">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text"><i
                                                                    class="fa fa-euro-sign"></i></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cor_nq">Cor</label>
                                                    <select id="cor_nq" name="cor_nq" class="form-control select2bs4"
                                                        style="width: 100%;">
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.cor') }}
                                                        </option>
                                                        <option>Vermelho</option>
                                                        <option>Azul</option>
                                                        <option>Verde</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="peso_nq">{{ __('lang.peso bruto') }}</label>
                                                    <input type="number" class="form-control" id="peso_nq" name="peso_nq"
                                                        placeholder="{{ __('lang.insira o') }} {{ __('lang.peso bruto') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_entrada_nq">{{ __('lang.data de entrada') }}</label>
                                                    <div class="input-group date" id="data_entrada_nq" name="data_entrada_nq"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            data-target="#data_entrada_nq" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_entrada_nq"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_abertura_nq">{{ __('lang.data de abertura') }}</label>
                                                    <div class="input-group date" id="data_abertura_nq" name="data_abertura_nq"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            data-target="#data_abertura_nq" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_abertura_nq"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_validade_nq">{{ __('lang.data de validade') }}</label>
                                                    <div class="input-group date" id="data_validade_nq" name="data_validade_nq"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            data-target="#data_validade_nq" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_validade_nq"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_termino_nq">{{ __('lang.data de termino') }}</label>
                                                    <div class="input-group date" id="data_termino_nq" name="data_termino_nq"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input"
                                                            data-target="#data_termino_nq" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_termino_nq"
                                                            data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="obvs_nq">{{ __('lang.observacoes') }}</label>
                                            <textarea id="obvs_nq" name="obvs_nq" class="form-control" rows="4"></textarea>
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


        $("#produto").change(function() {
            $produto = $('#produto').val();
            $.ajax({
                type: 'get',
                url: '/movimentos/entradaNEmbalagem',
                data: {
                    'produto': $produto,
                },
                success: function (data) {
                    $('#n_embalagem').val(data);
                }
            });
        });

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


        $(function() {
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
