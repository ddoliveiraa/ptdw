@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="/clientes">{{ __('lang.clientes') }}</a></li>
                        <li class="breadcrumb-item active">Departamento de Biologia</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">Departamento de Biologia</h1>
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
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="designacao">{{ __('lang.designacao') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="designacao"
                                                    value="Departamento de Biologia" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">{{ __('lang.responsavel') }} - {{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_nome"
                                                    value="Carolina Tavares" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_email">{{ __('lang.responsavel') }} - {{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_email"
                                                    value="carol@ua.pt" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">{{ __('lang.solicitante') }} - {{ __('lang.nome') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_nome"
                                                    value="Diogo Oliveira" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="solicitante_email">{{ __('lang.solicitante') }} - {{ __('lang.email') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_email"
                                                    value="diogo@ua.pt" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="solicitante_nome"
                                                    value="Maria Nobre" disabled>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="solicitante_email"
                                                    value="maria@ua.pt" disabled>
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
                                        <a href="/clientes"
                                            role="button" class="btn btn-block btn-default">{{ __('lang.voltar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="/clientes/editar" role="button"
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

    <!-- Select2 -->
    <script src="../plugins/select2/js/select2.full.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })

    </script>

@endsection
