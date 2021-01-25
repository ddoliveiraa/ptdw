@extends('layout')

@section('stylesheets')

    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/daterangepicker/daterangepicker.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/operadores">{{ __('lang.operadores') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.novo') }} {{ __('lang.operador') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.novo') }} {{ __('lang.operador') }}</h1>
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
                        <form method="POST" action="{{ public_path() }}/operadores/add/addOperador">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome_operador" class="control-label">{{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nome_operador" name="nome_operador" value="{{ old('nome_operador') }}" required
                                                    placeholder="{{ __('lang.insira o') }} {{ __('lang.nome') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_operador" class="control-label">{{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email_operador" name="email_operador" value="{{ old('email_operador') }}" required
                                                    placeholder="{{ __('lang.insira o') }} {{ __('lang.email') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="perfil_operador">{{ __('lang.perfil') }}</label>
                                            <select class="form-control select" id="perfil_operador" name="perfil_operador" value="{{ old('perfil_operador') }}" style="width: 100%;" required>
                                                @if(Session::get('status')!=='erro')
                                                    <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                        {{ __('lang.perfil') }}
                                                    </option>
                                                @endif
                                                @foreach ($perfis as $p)
                                                @if(old('perfil_operador') == $p->id)
                                                    <option value="{{ $p->id }}" selected>{{ $p->nome }}</option>
                                                    @else
                                                    <option value="{{ $p->id }}">{{ $p->nome }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_criacao">{{ __('lang.data-criacao') }}</label>
                                            <div class="input-group date" id="data_criacao" name="data_criacao" data-target-input="nearest" required>
                                                <input type="text" id="data_criacao_input" name="data_criacao_input"
                                                class="form-control datetimepicker-input {{ $errors->has('data_criacao_input') ? 'border border-danger' : '' }}"
                                                value="{{ old('data_criacao_input') }}" data-target="#data_criacao" placeholder="DD/MM/YYYY" />
                                                <div class="input-group-append" data-target="#data_criacao"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
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
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/operadores" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                                    </div>
                                    <div class="col-md-3">
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
        $(function() {
            $('#data_criacao_input').on("input", function(){$("#data_criacao_input").removeClass("border border-danger");});

            $(function() {
                $('.date').datetimepicker({
                    format: 'L',
                    locale: "{{ __('lang.locale-date') }}"
                });
            })

            if('{{ Session::get('status')}}'==='erro') {
                toastr["error"]("Por favor verifique os dados introduzidos.", "Erro ao adicionar operador");
            };

            if('{{ Session::get('status')}}'==='ok'){
                    toastr["success"]("Operador adicionado com sucesso.", "Novo operador adicionado");
            }
        })
    </script>

@endsection
