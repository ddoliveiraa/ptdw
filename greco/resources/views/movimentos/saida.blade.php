@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

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
                        <li class="breadcrumb-item active">{{ __('lang.registar saida') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.registar saida') }}</h1>
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
                                            <label for="produto">{{ __('lang.produto') }}</label>
                                            <select id="produto" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.produto') }}
                                                </option>
                                                <option>Cloreto de Sódio</option>
                                                <option>Hidróxido de Carbono</option>
                                                <option>Cloreto de Ferro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="n_embalagem_nq">{{ __('lang.n-embalagem') }}</label>
                                            <input type="text" class="form-control" id="n_embalagem_nq" value="230-12"
                                                disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="n_embalagem_nq">{{ __('lang.n-embalagem') }}</label>
                                            <select class="form-control select2bs4" id="n_embalagem_nq" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.n-embalagem') }}
                                                </option>
                                                <option>1234-12</option>
                                                <option>2137-12</option>
                                                <option>1223-22</option>
                                                <option>453-1</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cliente">{{ __('lang.cliente') }}</label>
                                            <select id="cliente" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.cliente') }}
                                                </option>
                                                <option>Departamento Biologia</option>
                                                <option>Departamento Química</option>
                                                <option>Departamento Física</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="solicitante">{{ __('lang.solicitante') }}</label>
                                            <select id="solicitante" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected >{{ __('lang.selecione o') }}
                                                    {{ __('lang.solicitante') }}
                                                </option>
                                                <option>Diogo</option>
                                                <option>Maria</option>
                                                <option>Ana</option>
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
            <!-- /.card -->
        </div>

    </section>
@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="{{ public_path() }}/plugins/select2/js/select2.full.min.js"></script>

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
