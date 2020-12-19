@extends('layout')

@section('stylesheets')

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
                    <h1 class="text-left display-4">Ana Silva</h1>
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
                                            <label for="nome_operador" class="control-label">{{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="nome_operador" disabled
                                                    value="Ana Silva">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email_operador" class="control-label">{{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email_operador"
                                                    value="ana@ua.pt" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="perfil_operador"
                                                class="control-label">{{ __('lang.perfil') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="perfil_operador"
                                                    value="Fiel de Armazém" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="data_criacao">{{ __('lang.data-criacao') }}</label>
                                            <div class="input-group date" id="data_criacao" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_criacao" value="01/09/2018" disabled />
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
                                    <textarea id="obvs" class="form-control" rows="4" disabled></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/operadores" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.voltar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="{{ public_path() }}/operadores/editar" role="button"
                                            class="btn btn-block btn-secondary">{{ __('lang.editar') }}</a>
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

@endsection
