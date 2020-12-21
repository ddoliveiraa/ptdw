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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/fornecedores">{{ __('lang.fornecedores') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.novo') }} {{ __('lang.fornecedor') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.novo') }} {{ __('lang.fornecedor') }}</h1>
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
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_designacao"
                                                class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_designacao" tabindex="1"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telefone"
                                                class="control-label">{{ __('lang.telefone') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_telefone" tabindex="2"
                                                required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="fornecedor_rua" class="control-label">{{ __('lang.rua') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_rua" tabindex="3" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="fornecedor_numero" class="control-label">{{ __('lang.numero') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_numero" tabindex="4"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="fornecedor_lote" class="control-label">{{ __('lang.lote') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_lote" tabindex="5" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_localidade"
                                                class="control-label">{{ __('lang.localidade') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_localidade" tabindex="6"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_codigopostal"
                                                class="control-label">{{ __('lang.codigo postal') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_codigopostal" tabindex="7"
                                                required>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_localidade"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_localidade" tabindex="8">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_nif" class="control-label">{{ __('lang.nif') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_nif" tabindex="9" required>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fornecedor_observacoes"
                                                class="control-label">{{ __('lang.observacoes') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_observacoes" tabindex="10">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fornecedor_condicoesespeciais">{{ __('lang.condicoes especiais') }}</label>
                                    <textarea id="fornecedor_condicoesespeciais" class="form-control" rows="4" tabindex="11"></textarea>
                                </div>
                                
                                <!--VENDEDOR 1-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <hr class="mt-3 mb-3" />
                                            <label for="fornecedor_vendedor1"
                                                class="control-label">{{ __('lang.vendedor1') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fornecedor_nomevendedor1"
                                                class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_nomevendedor1" tabindex="12">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_emailvendedor1"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_emailvendedor1"
                                                tabindex="13">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telemovelvendedor1"
                                                class="control-label">{{ __('lang.telemovel') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_telemovelvendedor1"
                                                tabindex="14">
                                        </div>
                                    </div>
                                </div>
                                <!--VENDEDOR 2-->
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <hr class="mt-3 mb-3" />
                                            <label for="fornecedor_vendedor2"
                                                class="control-label">{{ __('lang.vendedor2') }}</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fornecedor_nomevendedor2"
                                                class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_nomevendedor2" tabindex="15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_emailvendedor2"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_emailvendedor2"
                                                tabindex="16">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telemovelvendedor2"
                                                class="control-label">{{ __('lang.telemovel') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_telemovelvendedor2"
                                                tabindex="17">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/fornecedores" role="button"
                                            class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="{{ public_path() }}/fornecedores" role="button"
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

    <!-- InputMask -->
    <script src="{{ public_path() }}/plugins/moment/moment.min.js"></script>
    <script src="{{ public_path() }}/plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="{{ public_path() }}/plugins/moment/locale/pt.js"></script>
    <script src="{{ public_path() }}/plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ public_path() }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>

    </script>

@endsection
