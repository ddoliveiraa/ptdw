@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/jquery.tag-editor.css">
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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/clientes">{{ __('lang.clientes') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{ __('lang.novo') }} {{ __('lang.cliente') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.novo') }} {{ __('lang.cliente') }}</h1>
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
                        <form method="POST" action="{{ public_path() }}/clientes/add/store">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="designacao">{{ __('lang.designacao') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="designacao" name="designacao" value="{{ old('designacao') }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="responsavel"
                                                class="control-label">{{ __('lang.responsavel') }}</label>
                                            <div class="input-group margin">
                                                <input id="responsaveis" name="responsaveis" type="text" data-role="tagsinput" value="{{ old('responsaveis') }}">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat"
                                                        data-toggle="modal"
                                                        data-target="#modalSelecionarResponsavel">{{ __('lang.selecionar') }}</button>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">{{ __('lang.solicitante') }}s</label>
                                            <div class="input-group margin">
                                                <input id="solicitantes" name="solicitantes" type="text" data-role="tagsinput" value="{{ old('solicitantes') }}">
                                                <span class="input-group-btn">
                                                    <button type="button" class="btn btn-secondary btn-flat"
                                                        data-toggle="modal"
                                                        data-target="#modalSelecionarSolicitante">{{ __('lang.selecionar') }}</button>
                                                </span>
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
                                <a href="{{ public_path() }}/clientes" role="button"
                                    class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                            </div>
                            <div class="ml-auto col-3">
                            <button type="submit"
                                id="guardar" name="guardar" class="btn btn-block btn-secondary">{{ __('lang.adicionar') }}</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- /.card -->
        </div>

        <!-- Modal Selecionar Responsaveis -->
        <div class="modal fade" id="modalSelecionarResponsavel" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.responsavel') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="responsavel_nome">{{ __('lang.nome') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="responsavel_nome" name="responsavel_nome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="responsavel_email">{{ __('lang.email') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="responsavel_email" name="responsavel_email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                            id="cancelarResponsavel" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3"
                            id="selecionarResponsavel" tabindex="14">{{ __('lang.selecionar') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

        <!-- Modal Selecionar Responsaveis -->
        <div class="modal fade" id="modalSelecionarSolicitante" data-backdrop="static">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{ __('lang.solicitante') }}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="solicitante_nome">{{ __('lang.nome') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="solicitante_nome" name="solicitante_nome">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="solicitante_email">{{ __('lang.email') }}</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="solicitante_email" name="solicitante_email">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default col-md-3" data-dismiss="modal"
                            id="cancelarSolicitante" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3"
                            id="selecionarSolicitante" tabindex="14">{{ __('lang.selecionar') }}</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
        </div>

    </section>
@endsection

@section('scripts')

    <!-- Select2 -->
    <script src="{{ public_path() }}/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="{{ public_path() }}/dist/js/grupo-scripts/jquery.tag-editor.min.js"></script>
    <script type="text/javascript" src="{{ public_path() }}/dist/js/grupo-scripts/jquery.caret.min.js"></script>
    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>
    
        function validateEmail(email) {
            const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        $('#responsaveis').tagEditor();
        $('#solicitantes').tagEditor();

        $('#selecionarResponsavel').on('click', function() {
            if(validateEmail($('#responsavel_email').val())){
                $("#responsavel_email").removeClass("border border-danger");
            }else{
                $("#responsavel_email").addClass("border border-danger")
            }
            
            if($('#responsavel_nome').val() != ""){
                $("#responsavel_nome").removeClass("border border-danger");
            }else{
                $("#responsavel_nome").addClass("border border-danger")
            }

            if(validateEmail($('#responsavel_email').val()) && $('#responsavel_nome').val() != ""){
                $('#responsaveis').tagEditor('addTag', $('#responsavel_nome').val()+" | "+$('#responsavel_email').val());
                $('#modalSelecionarResponsavel').modal('hide');
            }
        });

        $('#selecionarSolicitante').on('click', function() {
            if(validateEmail($('#solicitante_email').val())){
                $("#solicitante_email").removeClass("border border-danger");
            }else{
                $("#solicitante_email").addClass("border border-danger")
            }
            
            if($('#solicitante_nome').val() != ""){
                $("#solicitante_nome").removeClass("border border-danger");
            }else{
                $("#solicitante_nome").addClass("border border-danger")
            }

            if(validateEmail($('#solicitante_email').val()) && $('#solicitante_nome').val() != ""){
                $('#solicitantes').tagEditor('addTag', $('#solicitante_nome').val()+" | "+$('#solicitante_email').val());
                $('#modalSelecionarSolicitante').modal('hide');
            }
            
        });

        $(function() {
            //Status não quimicos
            if('{{ Session::get('status')}}'==='erro') {
                toastr["error"]("Por favor verifique os dados introduzidos.", "Erro ao adicionar cliente");
            };

            if('{{ Session::get('status')}}'==='ok'){
                toastr["success"]("Cliente adicionado na base de dados com sucesso.", "Nova cliente adicionado");
            }

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })

    </script>
    
@endsection
