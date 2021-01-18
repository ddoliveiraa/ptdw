@extends('layout')

@section('stylesheets')

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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/operadores">{{ __('lang.operadores') }}</a>
                        </li>
                        <li class="breadcrumb-item active">Ana Silva</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="col-md-3 mb-3 mt-3 float-right">
                        <a role="button" href="{{ public_path() }}/operadores"
                        class="btn btn-block btn-danger">{{ __('lang.desativar') }}</a>
                        {{-- fiel de Armazém nao tem permissoes pra desativar operadores --}}
                 </div>
                    <h1 class="text-left display-4">{{ __('lang.editar') }} Ana Silva</h1>
                    
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
                        <form method="POST" action="/operadores/editar/editado/{{operador}}">
                            @csrf
                            @method('PUT')  
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nome_operador" class="control-label">{{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nome_operador" name="nome_operador" required
                                                    placeholder="{{ __('lang.insira o') }} {{ __('lang.nome') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_operador" class="control-label">{{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email_operador" name="email_operador" required
                                                    placeholder="{{ __('lang.insira o') }} {{ __('lang.email') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="perfil_operador">{{ __('lang.perfil') }}</label>
                                            <select class="form-control select" id="perfil_operador" name="perfil_operador" style="width: 100%;" required>
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.perfil') }}
                                                </option>
                                                @foreach ($perfis as $p)
                                                    <option value="{{  $p->id }}">{{ $p->nome }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_criacao">{{ __('lang.data-criacao') }}</label>
                                            <div class="input-group date" id="data_criacao" name="data_criacao" data-target-input="nearest" required>
                                                <input type="text" id="data_criacao_input" name="data_criacao_input" class="form-control datetimepicker-input"
                                                    data-target="#data_criacao" placeholder="DD/MM/YYYY" />
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
                                    <textarea id="obvs" name="obvs" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/operadores" role="button"
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
            $(function() {
                $('.date').datetimepicker({
                    format: 'L',
                    locale: "{{ __('lang.locale-date') }}"
                });
            })
        })
    </script>
@endsection
