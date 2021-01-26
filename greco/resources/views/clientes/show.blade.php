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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/clientes">{{ __('lang.clientes') }}</a></li>
                        <li class="breadcrumb-item active">{{$cliente->designacao}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{$cliente->designacao}}</h1>
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
                                                    value="{{$cliente->designacao}}" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">{{ __('lang.responsavel') }} - {{ __('lang.nome') }}</label>
                                            @foreach($cliente->responsaveis as $responsavel)
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_nome"
                                                    value="{{$responsavel->nome}}" disabled>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_email">{{ __('lang.responsavel') }} - {{ __('lang.email') }}</label>
                                            @foreach($cliente->responsaveis as $responsavel)
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_email"
                                                    value="{{$responsavel->email}}" disabled>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="responsavel_nome">{{ __('lang.solicitante') }} - {{ __('lang.nome') }}</label>
                                            @foreach($cliente->solicitantes as $solicitante)
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_nome"
                                                    value="{{$solicitante->nome}}" disabled>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="solicitante_email">{{ __('lang.solicitante') }} - {{ __('lang.email') }}</label>
                                            @foreach($cliente->solicitantes as $solicitante)
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="responsavel_email"
                                                    value="{{$solicitante->email}}" disabled>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" class="form-control" rows="4" disabled>{{$cliente->obs}}</textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row justify-content-between">
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/clientes"
                                            role="button" class="btn btn-block btn-default">{{ __('lang.voltar') }}</a>
                                    </div>
                                    <div class="col-md-3">
                                        <a href="{{ public_path() }}/clientes/editar/{{$cliente->id}}" role="button"
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
    <script src="{{ public_path() }}/plugins/select2/js/select2.full.min.js"></script>
    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>
    $(function() {
            if('{{ Session::get('status')}}'==='ok'){
                 toastr["success"]("Cliente editado com sucesso.", "Cliente editado")
            }
        })
        
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
