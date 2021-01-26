@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/toastr.css"/>

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/produtos">{{ __('lang.produtos') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{$produtos->designacao}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.editar') }} {{ __('lang.ficha do produto') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
            <div class="col-md-8 offset-md-2">
                    <div class="card card-primary">
                    <form method="POST" action="{{ public_path() }}/editar/produtos_nq/{{$produtos->id}}">
                        @csrf
                        @method('PUT')         
                            <div class="card-body">
                            <input type="hidden" id="id" name = "id" value="{{$produtos->id}}">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_designacao"
                                                class="control-label">{{ __('lang.designacao') }}</label>
                                            <input type="text" class="form-control"  id="produto_designacao" name="produto_designacao" tabindex="1"
                                                required value="{{$produtos->designacao}}">
                                        </div>
                                    </div>
                              
                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto_stock_minimo"
                                                class="control-label">{{ __('lang.stock minimo') }}</label>
                                            <input type="text" class="form-control" id="produto_stock_minimo" name="produto_stock_minimo" tabindex="6"
                                                required value="{{ old('produto_stock_minimo', $produtos->stock_min) }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                            <label for="familia"
                                                class="control-label">{{ __('lang.familia') }}</label>
                                            <input type="text" class="form-control" id="familia" tabindex="2"
                                                readonly value="{{ $produtos->get_subfam->nome }}">
                                        </div>

                            </div>

                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/ficha" role="button"
                                            class="btn btn-block btn-default" tabindex="11">{{ __('lang.cancelar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <button id="guardar" type="submit"
                                            class="btn btn-block btn-secondary" tabindex="12">{{ __('lang.guardar') }}</button>
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

    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>

        $(function() {
            if('{{ $errors->count() > 0}}') {
                toastr["error"]("Por favor reveja os campos.", "Erro ao editar produto")
            }

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

    </script>

@endsection
