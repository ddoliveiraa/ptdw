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
                        <li class="breadcrumb-item active">Novo Cliente</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">Novo Cliente</h1>
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
                                                    placeholder="{{__('lang.insira a') }} {{__('lang.designacao') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">{{ __('lang.responsavel') }} -
                                                {{ __('lang.email') }}</label>
                                            <select class="form-control select2bs4" id="responsavel_email"
                                                style="width: 100%;">
                                                <option selected value="" disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.responsavel') }}
                                                    < </option>
                                                <option>carol@ua.pt</option>
                                                <option>diogo@ua.pt</option>
                                                <option>maria@ua.pt</option>
                                                <option>bruno@ua.pt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('lang.solicitante') }}s  -
                                                {{ __('lang.email') }}</label>
                                            <select class="select2" multiple="multiple" data-placeholder="{{ __('lang.selecione o') }} {{ __('lang.solicitante') }}" style="width: 100%;">
                                              <option>diogo@ua.pt</option>
                                              <option>maria@ua.pt</option>
                                              <option>bruno@ua.pt</option>
                                            </select>
                                          </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" class="form-control" rows="4"></textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/clientes" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="/clientes" role="button"
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
