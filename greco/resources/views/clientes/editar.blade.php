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
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/clientes">{{ __('lang.clientes') }}</a>
                        </li>
                        <li class="breadcrumb-item active">{{$cliente->designacao}}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.editar') }} {{ __('lang.cliente') }}</h1>
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
                        <form method="POST" action="{{ public_path() }}/clientes/editado/{{$cliente->id}}">
                        @csrf
                        @method('PUT') 
                            <div class="card-body">
                            <input type="hidden" id="id" name = "id" value="{{$cliente->id}}">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="designacao">{{ __('lang.designacao') }}</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="designacao" name="designacao" value="{{old('designacao',$cliente->designacao)}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ __('lang.responsavel') }}</label>
                                            <select class="select2" multiple="multiple" id="responsavel" name="responsavel" style="width: 100%;">
                                            @foreach ($responsaveis as $r)
                                            <option value="{{$r->id}}" @foreach($responsaveis as $res) @if($res->id == $r->id) selected @endif @endforeach>{{$r->nome}} | {{$r->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>{{ __('lang.solicitante') }}s</label>
                                            <select class="select2" multiple="multiple" id="solicitante" name="solicitante" style="width: 100%;">
                                            @foreach ($solicitantes as $s)
                                            <option value="{{$s->id}}"  @foreach($solicitantes as $sol) @if($sol->id == $s->id) selected @endif @endforeach>{{$s->nome}} | {{$s->email}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div> -->
                            

                            <div class="form-group">
                                <label for="obvs">{{ __('lang.observacoes') }}</label>
                                <textarea id="obvs" name="obvs" class="form-control" rows="4">{{$cliente->obs}}</textarea>
                            </div>
                        </div>
                    

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{ public_path() }}/clientes/{{$cliente->id}}" role="button"
                                    class="btn btn-block btn-default">{{ __('lang.cancelar') }}</a>
                            </div>
                            <div class="col-md-3">
                                <input id="ids_responsaveis" name="ids_responsaveis" type="hidden">
                                <input id="ids_solicitantes" name="ids_solicitantes" type="hidden">
                            <button id="guardar" type="submit"
                                class="btn btn-block btn-secondary" tabindex="12">{{ __('lang.guardar') }}</button>
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
                toastr["error"]("Por favor reveja os campos.", "Erro ao editar Cliente")
            }

            $('#ids_responsaveis').val($('#responsavel').val());
            $('#ids_solicitantes').val($('#solicitante').val());
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
