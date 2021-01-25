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

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/toastr.css"/>

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
                                <form method="POST" action="{{ public_path() }}/movimentos/add/entrada_quimico">
                                    @csrf <!-- Cross Site Request Forgery -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto">{{ __('lang.produto') }}</label>
                                                    <select id="produto" name="produto" value="{{ old('produto') }}" class="form-control select2bs4" style="width: 100%;" required>
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.produto') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($produtos as $p)
                                                            @if(old('produto') == $p->id)
                                                                <option value="{{ $p->id }}" selected>{{ $p->designacao }}</option>
                                                            @else
                                                                <option value="{{ $p->id }}">{{ $p->designacao }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="n_embalagem">{{ __('lang.n-embalagem') }}</label>
                                                    <input type="text" class="form-control" id="n_embalagem" name="n_embalagem" value="{{ old('n_embalagem') }}" required disabled>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="referencia">{{ __('lang.referencia') }}</label>
                                                    <input type="text" class="form-control" id="referencia" name="referencia" value="{{ old('referencia') }}" required
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.referencia') }}">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unidades">{{ __('lang.unidades') }}</label>
                                                    <select id="unidades" name="unidades" class="form-control select2bs4" value="{{ old('unidades') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecionar') }}
                                                            {{ __('lang.unidades') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($unidades as $u)
                                                            @if(old('unidades') == $u->id)
                                                                <option value="{{ $u->id }}" selected>{{ $u->unidade }}</option>
                                                            @else
                                                                <option value="{{ $u->id }}">{{ $u->unidade }}</option>
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
                                                    <select id="tipo_embalagem" name="tipo_embalagem" class="form-control select2bs4" value="{{ old('tipo_embalagem') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.insira o') }}
                                                            {{ __('lang.tipo de embalagem') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($tipoembalagem as $te)
                                                            @if(old('tipo_embalagem') == $te->id)
                                                            <option value="{{ $te->id }}" selected>{{ $te->nome }}</option>
                                                            @else
                                                            <option value="{{ $te->id }}">{{ $te->nome }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="cap_embalagem">{{ __('lang.capacidade da embalagem') }}</label>
                                                    <input type="number" class="form-control" id="cap_embalagem" name="cap_embalagem" min="1" value="{{ old('cap_embalagem') }}" required
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.capacidade da embalagem') }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                                    <select id="fornecedor" name="fornecedor" class="form-control select2bs4" value="{{ old('fornecedor') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.fornecedor') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($fornecedores as $f)
                                                            @if(old('fornecedor') == $f->id)
                                                            <option value="{{ $f->id }}" selected>{{ $f->designacao }}</option>
                                                            @else
                                                            <option value="{{ $f->id }}">{{ $f->designacao }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="marca">{{ __('lang.nome da marca') }}</label>
                                                    <select id="marca" name="marca" class="form-control select2bs4" style="width: 100%;" value="{{ old('marca') }}" required>
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.nome da marca') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($marcas as $m)
                                                            @if(old('marca') == $m->id)
                                                            <option value="{{ $m->id }}" selected>{{ $m->marca }}</option>
                                                            @else
                                                            <option value="{{ $m->id }}">{{ $m->marca }}</option>
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
                                                    <select id="armario" name="armario" class="form-control select2bs4" value="{{ old('armario') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.armario') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($armarios as $a)
                                                            @if(old('armario') == $a->id)
                                                                <option value="{{  $a->id }}" selected>{{ $a->armario }}</option>
                                                            @else
                                                                <option value="{{  $a->id }}">{{ $a->armario }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prateleira">{{ __('lang.prataleira') }}</label>
                                                    <select id="prateleira" name="prateleira" class="form-control select2bs4" value="{{ old('prateleira') }}" required
                                                        style="width: 100%;" disabled>
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.prataleira') }}
                                                        </option>
                                                        @endif
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="iva">{{ __('lang.taxa de iva') }}</label>
                                                    <select id="iva" name="iva" class="form-control select2bs4" value="{{ old('iva') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.taxa de iva') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($ivas as $i)
                                                            @if(old('iva') == $i->id)
                                                                <option value="{{ $i->id }}" selected>{{ $i->nome*100 }}%</option>
                                                            @else
                                                                <option value="{{ $i->id }}">{{ $i->nome*100 }}%</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="preco">{{ __('lang.preco') }}</label>
                                                    <div class="input-group">
                                                        <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" required
                                                            placeholder="{{ __('lang.insira o') }} {{ __('lang.preco') }}"
                                                            step="0.01" min="0.01">
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
                                                    <select id="estado" name="estado" class="form-control select2bs4" value="{{ old('estado') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                            {{ __('lang.estado fisico') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($estados as $e)
                                                            @if(old('estado') == $e->id)
                                                                <option value="{{ $e->id }}" selected>{{ $e->estado_fisico }}</option>
                                                            @else
                                                                <option value="{{ $e->id }}">{{ $e->estado_fisico }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="textura">{{ __('lang.textura/viscosidade') }}</label>
                                                    <select id="textura" name="textura" class="form-control select2bs4" value="{{ old('textura') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.textura/viscosidade') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($texturas_viscosidades as $tv)
                                                            @if(old('textura') == $tv->id)
                                                                <option value="{{ $tv->id }}" selected>{{ $tv->textura_viscosidade }}</option>
                                                            @else
                                                                <option value="{{ $tv->id }}">{{ $tv->textura_viscosidade }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="cor">Cor</label>
                                                    <select id="cor" name="cor" class="form-control select2bs4" style="width: 100%;" value="{{ old('cor') }}" required>
                                                        @if(Session::get('status')!=='erro_quimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.cor') }}
                                                        </option>
                                                        @endif
                                                        @foreach ($cores as $c)
                                                            @if(old('cor') == $c->id)
                                                                <option value="{{ $c->id }}" selected>{{ $c->cor }}</option>
                                                            @else
                                                                <option value="{{ $c->id }}">{{ $c->cor }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="peso">{{ __('lang.peso bruto') }}</label>
                                                    <input type="number" class="form-control" id="peso" name="peso" min="1" value="{{ old('peso') }}" required
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
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_entrada_input') }}"
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
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_abertura_input') }}"
                                                            id="data_abertura_input" name="data_abertura_input" disabled
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
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_validade_input') }}" disabled 
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
                                        </div>

                                        <div class="form-group">
                                            <label for="obvs">{{ __('lang.observacoes') }}</label>
                                            <textarea id="obvs" name="obvs" class="form-control" rows="4">{{ old('obvs') }}</textarea>
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

                                <form method="POST" action="{{ public_path() }}/movimentos/add/entrada_naoquimico">
                                    @csrf <!-- Cross Site Request Forgery -->
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="produto_nq">{{ __('lang.produto') }}</label>
                                                    <select id="produto_nq" name="produto_nq" class="form-control select2bs4" value="{{ old('produto_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                                {{ __('lang.produto') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($produtosnq as $p)
                                                            @if(old('produto_nq') == $p->id)
                                                                <option value="{{ $p->id }}" selected>{{ $p->designacao }}</option>
                                                            @else
                                                                <option value="{{ $p->id }}">{{ $p->designacao }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="n_embalagem_nq">{{ __('lang.n-embalagem') }}</label>
                                                    <input type="text" class="form-control" id="n_embalagem_nq" name="n_embalagem_nq" value="{{ old('n_embalagem_nq') }}"
                                                        disabled required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="referencia_nq">{{ __('lang.referencia') }}</label>
                                                    <input type="text" class="form-control" id="referencia_nq" name="referencia_nq" value="{{ old('referencia_nq') }}"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.referencia') }}" required>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="unidades_nq">{{ __('lang.unidades') }}</label>
                                                    <select id="unidades_nq" name="unidades_nq" class="form-control select2bs4" value="{{ old('unidades_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecionar') }}
                                                                {{ __('lang.unidades') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($unidades as $u)
                                                            @if(old('unidades_nq') == $u->id)
                                                                <option value="{{ $u->id }}" selected>{{ $u->unidade }}</option>
                                                            @else
                                                                <option value="{{ $u->id }}">{{ $u->unidade }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="tipo_embalagem_nq">{{ __('lang.tipo de embalagem') }}</label>
                                                    <select id="tipo_embalagem_nq" name="tipo_embalagem_nq" class="form-control select2bs4" value="{{ old('tipo_embalagem_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.insira o') }}
                                                                {{ __('lang.tipo de embalagem') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($tipoembalagem as $te)
                                                            @if(old('tipo_embalagem_nq') == $te->id)
                                                                <option value="{{ $te->id }}" selected>{{ $te->nome }}</option>
                                                            @else
                                                                <option value="{{ $te->id }}">{{ $te->nome }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label
                                                        for="cap_embalagem_nq">{{ __('lang.capacidade da embalagem') }}</label>
                                                    <input type="number" min="1" class="form-control" id="cap_embalagem_nq" name="cap_embalagem_nq" value="{{ old('cap_embalagem_nq') }}"
                                                        placeholder="{{ __('lang.insira a') }} {{ __('lang.capacidade da embalagem') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fornecedor_nq">{{ __('lang.fornecedor') }}</label>
                                                    <select id="fornecedor_nq" name="fornecedor_nq" class="form-control select2bs4" value="{{ old('fornecedor_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                                {{ __('lang.fornecedor') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($fornecedores as $f)
                                                            @if(old('fornecedor_nq') == $f->id)
                                                                <option value="{{ $f->id }}" selected>{{ $f->designacao }}</option>
                                                            @else
                                                                <option value="{{ $f->id }}">{{ $f->designacao }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="marca_nq">{{ __('lang.nome da marca') }}</label>
                                                    <select id="marca_nq" name="marca_nq" class="form-control select2bs4" style="width: 100%;" value="{{ old('marca_nq') }}" required>
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                                {{ __('lang.nome da marca') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($marcas as $m)
                                                            @if(old('marca_nq') == $m->id)
                                                                <option value="{{ $m->id }}" selected>{{ $m->marca }}</option>
                                                            @else
                                                                <option value="{{ $m->id }}">{{ $m->marca }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                 </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="armario_nq">{{ __('lang.armario') }}</label>
                                                    <select id="armario_nq" name="armario_nq" class="form-control select2bs4" value="{{ old('armario_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                                {{ __('lang.armario') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($armarios as $a)
                                                            @if(old('armario_nq') == $a->id)
                                                                <option value="{{ $a->id }}" selected>{{ $a->armario }}</option>
                                                            @else
                                                                <option value="{{ $a->id }}">{{ $a->armario }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="prateleira_nq">{{ __('lang.prataleira') }}</label>
                                                    <select id="prateleira_nq" name="prateleira_nq" class="form-control select2bs4" value="{{ old('prateleira_nq') }}" required
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
                                                    <label for="iva_nq">{{ __('lang.taxa de iva') }}</label>
                                                    <select id="iva_nq" name="iva_nq" class="form-control select2bs4" value="{{ old('iva_nq') }}" required
                                                    style="width: 100%;">
                                                    @if(Session::get('status')!=='erro_naoquimico')
                                                        <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                            {{ __('lang.taxa de iva') }}
                                                        </option>
                                                    @endif
                                                    @foreach ($ivas as $i)
                                                        @if(old('iva_nq') == $i->id)
                                                            <option value="{{ $i->id }}" selected>{{ $i->nome*100 }}%</option>
                                                        @else
                                                            <option value="{{ $i->id }}">{{ $i->nome*100 }}%</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="preco_nq">{{ __('lang.preco') }}</label>
                                                    <div class="input-group">
                                                        <input type="number" step="0.01" min="0.01" class="form-control" id="preco_nq" name="preco_nq" value="{{ old('preco_nq') }}"
                                                            placeholder="{{ __('lang.insira o') }} {{ __('lang.preco') }}" step="0.05" required>
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
                                                    <label for="cor_nq">Cor</label>
                                                    <select id="cor_nq" name="cor_nq" class="form-control select2bs4" value="{{ old('cor_nq') }}" required
                                                        style="width: 100%;">
                                                        @if(Session::get('status')!=='erro_naoquimico')
                                                            <option value="" selected disabled>{{ __('lang.selecione a') }}
                                                                {{ __('lang.cor') }}
                                                            </option>
                                                        @endif
                                                        @foreach ($cores as $c)
                                                            @if(old('cor_nq') == $c->id)
                                                                <option value="{{ $c->id }}" selected>{{ $c->cor }}</option>
                                                            @else
                                                                <option value="{{ $c->id }}">{{ $c->cor }}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="peso_nq">{{ __('lang.peso bruto') }}</label>
                                                    <input type="number" min="1" class="form-control" id="peso_nq" name="peso_nq" value="{{ old('peso_nq') }}"
                                                        placeholder="{{ __('lang.insira o') }} {{ __('lang.peso bruto') }}" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="data_entrada_nq">{{ __('lang.data de entrada') }}</label>
                                                    <div class="input-group date" id="data_entrada_nq" name="data_entrada_nq"
                                                        data-target-input="nearest">
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_entrada_nq_input') }}"
                                                            id="data_entrada_nq_input" name="data_entrada_nq_input"
                                                            data-target="#data_entrada_nq" placeholder="DD/MM/YYYY">
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
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_abertura_nq_input') }}" disabled
                                                            id="data_abertura_nq_input" name="data_abertura_nq_input"
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
                                                        <input type="text" class="form-control datetimepicker-input" value="{{ old('data_validade_nq_input') }}" disabled
                                                            id="data_validade_nq_input" name="data_validade_nq_input"
                                                            data-target="#data_validade_nq" placeholder="DD/MM/YYYY" />
                                                        <div class="input-group-append" data-target="#data_validade_nq"
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
                                            <textarea id="obvs_nq" name="obvs_nq" class="form-control" rows="4">{{ old('obvs_nq') }}</textarea>
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
        

        function checkDatesNQ(){
            let d1 = $("#data_entrada_nq_input").val().split("/");
            let d1num = d1[2]+d1[1]+d1[0];
            let d2 = $("#data_abertura_nq_input").val().split("/");
            let d2num = d2[2]+d2[1]+d2[0];
            let d3 = $("#data_validade_nq_input").val().split("/");
            let d3num = d3[2]+d3[1]+d3[0];
            let d4 = $("#data_termino_nq_input").val().split("/");
            let d4num = d4[2]+d4[1]+d4[0];

            if(d1num > d2num){
                $("#data_abertura_nq_input").addClass("border border-danger");
            }else{
                $("#data_abertura_nq_input").removeClass("border border-danger");
            }

            if(d1num > d3num){
                $("#data_validade_nq_input").addClass("border border-danger");
            }else{
                $("#data_validade_nq_input").removeClass("border border-danger");
            }

            if(d1num > d4num || d4num < d2num){
                $("#data_termino_nq_input").addClass("border border-danger");
            }else{
                $("#data_termino_nq_input").removeClass("border border-danger");
            }

        }

        $("#data_entrada_nq").on("input", function() {
            $('#data_abertura_nq_input').attr("disabled", false);
            $('#data_validade_nq_input').attr("disabled", false);
            checkDatesNQ();
        });

        $("#data_abertura_nq").on("input", function() {
            checkDatesNQ();
        });

        $("#data_validade_nq").on("input", function() {
            checkDatesNQ();
        });

        function setEmbalagem(produto, id){
            $.ajax({
                type: 'get',
                url: '/movimentos/entradaNEmbalagem',
                data: {
                    'produto': produto,
                },
                success: function (data) {
                    $(id).val(data);
                }
            });
        }

        $("#produto").change(function() {
            $produto = $('#produto').val();
            setEmbalagem($produto, '#n_embalagem');
        });

        $("#produto_nq").change(function() {
            $produto = $('#produto_nq').val();
            setEmbalagem($produto, '#n_embalagem_nq');
        });

        function setPrateleira(armario, id){
            $.ajax({
                type: 'get',
                url: '/movimentos/entradaPrateleira',
                data: {
                    'armario': armario,
                },
                success: function (data) {
                    $(id).attr("disabled", false);
                    $(id).html(data);
                }
            });
        }

        $("#armario").change(function() {
            $armario = $('#armario').val();
            setPrateleira($armario, '#prateleira');
        });

        $("#armario_nq").change(function() {
            $armario = $('#armario_nq').val();
            setPrateleira($armario, '#prateleira_nq');
        });


        $(function() {
            //Status quimicos
            if('{{ Session::get('status')}}'==='erro_quimico') {
                toastr["error"]("Por favor verifique as datas introduzidas.", "Erro ao adicionar entrada");

                $produto = $('#produto').val();
                setEmbalagem($produto, '#n_embalagem')
                $armario = $('#armario').val();
                setPrateleira($armario, '#prateleira');

                $('#data_abertura_nq_input').attr("disabled", false);
                $('#data_validade_nq_input').attr("disabled", false);
                checkDates();

                initializeDatePickers();
            };
            //Status não quimicos
            if('{{ Session::get('status')}}'==='erro_naoquimico') {
                toastr["error"]("Por favor verifique as datas introduzidas.", "Erro ao adicionar entrada");

                $produto = $('#produto_nq').val();
                setEmbalagem($produto, '#n_embalagem_nq')
                $armario = $('#armario_nq').val();
                setPrateleira($armario, '#prateleira_nq');

                $('#data_abertura_input').attr("disabled", false);
                $('#data_validade_input').attr("disabled", false);
                checkDatesNQ();

                initializeDatePickers();
            };

            if('{{ Session::get('status')}}'==='ok'){
                    toastr["success"]("Entrada introduzida na base de dados com sucesso.", "Nova entrada criada");
            }

            function initializeDatePickers(){
                $('.date').datetimepicker({
                    format: 'L',
                    locale: "{{ __('lang.locale-date') }}"
                });
            }

            initializeDatePickers();

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                    theme: 'bootstrap4'
                })

        })

    </script>

@endsection
