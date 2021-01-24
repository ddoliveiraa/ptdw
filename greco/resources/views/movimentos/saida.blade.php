@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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
                        <form method="POST" action="/movimentos/add/saida">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.produto') }}</label>
                                            <select id="produto" name="produto" class="form-control select2bs4" style="width: 100%;" value="{{ old('produto') }}" required>
                                                @if(Session::get('status')!=='erro')
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.produto') }}
                                                </option>
                                                @endif
                                                @foreach ($produtos_com_entrada as $p)
                                                    @if(old('produto') == $p->id)
                                                        <option value="{{ $p->id }}" selected>{{ $p->designacao }}</option>
                                                    @else
                                                        <option value="{{ $p->id }}">{{ $p->designacao }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="n_embalagem">{{ __('lang.n-embalagem') }}</label>
                                            <select class="form-control select2bs4" id="n_embalagem" name="n_embalagem" disabled value="{{ old('n_embalagem') }} required"
                                                style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.n-embalagem') }}
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="cliente">{{ __('lang.cliente') }}</label>
                                            <select id="cliente" name="cliente" class="form-control select2bs4" style="width: 100%;" value="{{ old('cliente') }}" required>
                                                @if(Session::get('status')!=='erro')
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.cliente') }}
                                                </option>
                                                @endif
                                                @foreach ($clientes as $c)
                                                @if(old('cliente') == $c->id)
                                                    <option value="{{ $c->id }}" selected>{{ $c->designacao }}</option>
                                                    @else
                                                    <option value="{{ $c->id }}">{{ $c->designacao }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="solicitante">{{ __('lang.solicitante') }}</label>
                                            <select id="solicitante" name="solicitante" disabled required value="{{ old('solicitante') }}"
                                                class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.solicitante') }}
                                                </option>
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
                                <div class="row justify-content-end">
                                    <div class="col-md-3">
                                        <input id="n_ordem_tmp" name="n_ordem_tmp" type="hidden">
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
    <!-- Toastr -->
    <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>

        $("#n_embalagem").change(function() {
            let val = $("#n_embalagem option:selected").text().split("-",2);
            $('#n_ordem_tmp').val(val[1]);
        });

        function setEmbalagens(produto){
            $.ajax({
                type: 'get',
                url: '/movimentos/saida/getEmbalagensProdutos',
                data: {
                    'produto': produto,
                },
                success: function (data) {
                    $("#n_embalagem").empty();
                    $('#n_embalagem').attr("disabled", false);

                    data.forEach(function(d) {
                        $("#n_embalagem").append(new Option(d.id_inventario+"-"+d.id_ordem, d.id));
                    });
                    //caso nao se mude a embalagem
                    let val = $("#n_embalagem option:selected").text().split("-",2);
                    $('#n_ordem_tmp').val(val[1]);
                }
            });
        }

        $("#produto").change(function() {       
            setEmbalagens($('#produto').val());
        });

        function setSolicitantes(cliente){
            $.ajax({
                type: 'get',
                url: '/movimentos/saidaSolicitantes',
                data: {
                    'cliente': cliente,
                },
                success: function (data) {
                    $("#solicitante").empty();
                    $('#solicitante').attr("disabled", false);

                    data.forEach(function(d) {
                        $("#solicitante").append(new Option(d.nome, d.id));
                    })
                }
            });
        }

        $("#cliente").change(function() {
            setSolicitantes($('#cliente').val());
        });

        $(function() {
            //Status não quimicos
            if('{{ Session::get('status')}}'==='erro') {
                toastr["error"]("Por favor verifique os dados introduzidos.", "Erro ao adicionar saida");
                setEmbalagens($('#produto').val());
                setSolicitantes($('#cliente').val());
            };

            if('{{ Session::get('status')}}'==='ok'){
                    toastr["success"]("Saida introduzida na base de dados com sucesso.", "Nova saida criada");
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
