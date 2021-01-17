@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/tagsinput.css">

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
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="designacao">{{ __('lang.designacao') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="designacao" name="designacao">
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
                                                <input type="text" data-role="tagsinput" value=" ">
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
                                            <label>{{ __('lang.solicitante') }}s</label>
                                            <select class="select2" multiple="multiple" id="solicitante" name="solicitante"
                                                data-placeholder="{{ __('lang.selecione o') }} {{ __('lang.solicitante') }}"
                                                style="width: 100%;">
                                            </select>
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
                            id="cancelar" tabindex="13">{{ __('lang.cancelar') }}</button>
                            <button type="button" class="btn btn-secondary col-md-3" data-dismiss="modal"
                            id="selecionar" tabindex="14">{{ __('lang.selecionar') }}</button>
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

    <script>
    
        $('#responsavel').on('change', function() {
            $.ajax({
                url: '/produtos_q',
                type: "Get",
                dataType: 'json',//this will expect a json response
                data:{responsaveis:$('#responsavel').val()}, 
                success: function(response){ 
                        console.log(data);
                    }
            });
        });

        $(function() {

            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

        })

    </script>
    <script type="text/javascript" src="{{ public_path() }}/dist/js/grupo-scripts/tagsinput.js"></script>
@endsection
