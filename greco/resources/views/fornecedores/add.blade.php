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
                        <form method="POST" action="{{ public_path() }}/fornecedores/add/store">
                            @csrf
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_designacao"
                                                class="control-label">{{ __('lang.nomefornecedor') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_telefone') ? 'border border-danger' : '' }}"
                                            id="fornecedor_designacao" name="fornecedor_designacao" value="{{ old('fornecedor_designacao') }}" tabindex="1" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telefone"
                                                class="control-label">{{ __('lang.telefone') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_telefone') ? 'border border-danger' : '' }}"
                                            id="fornecedor_telefone" name="fornecedor_telefone" value="{{ old('fornecedor_telefone') }}" tabindex="2" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label for="fornecedor_rua" class="control-label">{{ __('lang.rua') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_rua') ? 'border border-danger' : '' }}"
                                            id="fornecedor_rua" name="fornecedor_rua" tabindex="3" value="{{ old('fornecedor_rua') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-1">
                                        <div class="form-group">
                                            <label for="fornecedor_numero" class="control-label">{{ __('lang.numero') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_numero') ? 'border border-danger' : '' }}"
                                            id="fornecedor_numero" name="fornecedor_numero" value="{{ old('fornecedor_numero') }}" tabindex="4" required>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="fornecedor_lote" class="control-label">{{ __('lang.lote') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_lote') ? 'border border-danger' : '' }}"
                                            id="fornecedor_lote" name="fornecedor_lote" tabindex="5" value="{{ old('fornecedor_lote') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_localidade"
                                                class="control-label">{{ __('lang.localidade') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_localidade') ? 'border border-danger' : '' }}"
                                            id="fornecedor_localidade" name="fornecedor_localidade" value="{{ old('fornecedor_localidade') }}" tabindex="6" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_codigopostal"
                                                class="control-label">{{ __('lang.codigo postal') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_codigopostal') ? 'border border-danger' : '' }}"
                                            id="fornecedor_codigopostal" name="fornecedor_codigopostal" value="{{ old('fornecedor_codigopostal') }}" tabindex="7" required>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_email"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_email') ? 'border border-danger' : '' }}"
                                            id="fornecedor_email" name="fornecedor_email" tabindex="8" value="{{ old('fornecedor_email') }}" required>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_nif" class="control-label">{{ __('lang.nif') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_nif') ? 'border border-danger' : '' }}"
                                            id="fornecedor_nif" name="fornecedor_nif" tabindex="9" value="{{ old('fornecedor_nif') }}" required>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="fornecedor_observacoes"
                                                class="control-label">{{ __('lang.observacoes') }}</label>
                                            <input type="text" class="form-control" id="fornecedor_observacoes" name="fornecedor_observacoes" value="{{ old('fornecedor_observacoes') }}" tabindex="10">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="fornecedor_condicoesespeciais">{{ __('lang.condicoes especiais') }}</label>
                                    <textarea id="fornecedor_condicoesespeciais" name="fornecedor_condicoesespeciais" class="form-control" rows="4" tabindex="11">{{ old('fornecedor_condicoesespeciais') }}</textarea>
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
                                            <input type="text" class="form-control" id="fornecedor_nomevendedor1" name="fornecedor_nomevendedor1" value="{{ old('fornecedor_nomevendedor1') }}" required tabindex="12">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_emailvendedor1"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_emailvendedor1') ? 'border border-danger' : '' }}"
                                            id="fornecedor_emailvendedor1" name="fornecedor_emailvendedor1" value="{{ old('fornecedor_emailvendedor1') }}" required tabindex="13">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telemovelvendedor1"
                                                class="control-label">{{ __('lang.telemovel') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_telemovelvendedor1') ? 'border border-danger' : '' }}"
                                            id="fornecedor_telemovelvendedor1" name="fornecedor_telemovelvendedor1" value="{{ old('fornecedor_telemovelvendedor1') }}" required tabindex="14">
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
                                            <input type="text" class="form-control" id="fornecedor_nomevendedor2" name="fornecedor_nomevendedor2" value="{{ old('fornecedor_nomevendedor2') }}" required tabindex="15">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label for="fornecedor_emailvendedor2"
                                                class="control-label">{{ __('lang.email') }}</label>
                                            <input type="text" class="form-control {{ $errors->has('fornecedor_emailvendedor2') ? 'border border-danger' : '' }}"
                                            id="fornecedor_emailvendedor2" name="fornecedor_emailvendedor2" value="{{ old('fornecedor_emailvendedor2') }}" required tabindex="16">
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="fornecedor_telemovelvendedor2"
                                                class="control-label">{{ __('lang.telemovel') }}</label>
                                            <input type="number" class="form-control {{ $errors->has('fornecedor_telemovelvendedor2') ? 'border border-danger' : '' }}"
                                            id="fornecedor_telemovelvendedor2" name="fornecedor_telemovelvendedor2" value="{{ old('fornecedor_telemovelvendedor2') }}" required tabindex="17">
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
        $('#fornecedor_designacao').on("input", function(){         $("#fornecedor_designacao").removeClass("border border-danger");});
        $('#fornecedor_rua').on("input", function(){                $("#fornecedor_rua").removeClass("border border-danger");});
        $('#fornecedor_telefone').on("input", function(){           $("#fornecedor_telefone").removeClass("border border-danger");});
        $('#fornecedor_numero').on("input", function(){             $("#fornecedor_numero").removeClass("border border-danger");});
        $('#fornecedor_lote').on("input", function(){               $("#fornecedor_lote").removeClass("border border-danger");});
        $('#fornecedor_localidade').on("input",function(){          $("#fornecedor_localidade").removeClass("border border-danger");});
        $('#fornecedor_codigopostal').on("input", function(){       $("#fornecedor_codigopostal").removeClass("border border-danger");});
        $('#fornecedor_email').on("input", function(){              $("#fornecedor_email").removeClass("border border-danger");});
        $('#fornecedor_nif').on("input", function(){                $("#fornecedor_nif").removeClass("border border-danger");});
        $('#fornecedor_emailvendedor1').on("input", function(){     $("#fornecedor_emailvendedor1").removeClass("border border-danger");});
        $('#fornecedor_telemovelvendedor1').on("input", function(){ $("#fornecedor_telemovelvendedor1").removeClass("border border-danger");});
        $('#fornecedor_emailvendedor2').on("input", function(){     $("#fornecedor_emailvendedor2").removeClass("border border-danger");});
        $('#fornecedor_telemovelvendedor2').on("input", function(){ $("#fornecedor_telemovelvendedor2").removeClass("border border-danger");});
       
        if('{{ Session::get('status')}}'==='erro') {
            toastr["error"]("Por favor verifique os dados introduzidos.", "Erro ao adicionar fornecedor");
        };
        if('{{ Session::get('status')}}'==='ok'){
            toastr["success"]("Fornecedor adicionado com sucesso.", "Novo fornecedor adicionado");
        };
        
    </script>

@endsection
