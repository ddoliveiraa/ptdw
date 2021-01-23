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
                        <form method="POST" action="/movimentos/add/saida">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.produto') }}</label>
                                            <select id="produto" name="produto" class="form-control select2bs4" style="width: 100%;" required>
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.produto') }}
                                                </option>
                                                @foreach ($produtos_com_entrada as $p)
                                                    <option value="{{  $p->id }}">{{ $p->designacao }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="n_embalagem">{{ __('lang.n-embalagem') }}</label>
                                            <select class="form-control select2bs4" id="n_embalagem" name="n_embalagem" disabled required
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
                                            <select id="cliente" name="cliente" class="form-control select2bs4" style="width: 100%;" required>
                                                <option value="" selected disabled>{{ __('lang.selecione o') }}
                                                    {{ __('lang.cliente') }}
                                                </option>
                                                @foreach ($clientes as $c)
                                                    <option value="{{  $c->id }}">{{ $c->designacao }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="solicitante">{{ __('lang.solicitante') }}</label>
                                            <select id="solicitante" name="solicitante" disabled required
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

    <script>

        $("#n_embalagem").change(function() {
            let val = $("#n_embalagem option:selected").text().split("-",2);
            $('#n_ordem_tmp').val(val[1]);
        });

        $("#produto").change(function() {
            $("#n_embalagem").empty();
            $produto = $('#produto').val();
            $('#n_embalagem').attr("disabled", false);
            console.log($produto);
            $.ajax({
                type: 'get',
                url: '/movimentos/saida/getEmbalagensProdutos',
                data: {
                    'produto': $produto,
                },
                success: function (data) {
                    data.forEach(function(d) {
                        $("#n_embalagem").append(new Option(d.id_inventario+"-"+d.id_ordem, d.id));
                    });
                    //caso nao se mude a embalagem
                    let val = $("#n_embalagem option:selected").text().split("-",2);
                    $('#n_ordem_tmp').val(val[1]);
                }
            });
        });

        $("#cliente").change(function() {
            $("#solicitante").empty();
            $cliente = $('#cliente').val();
            $('#solicitante').attr("disabled", false);
            $.ajax({
                type: 'get',
                url: '/movimentos/saidaSolicitantes',
                data: {
                    'cliente': $cliente,
                },
                success: function (data) {
                    data.forEach(function(d) {
                        $("#solicitante").append(new Option(d.nome, d.id));
                    })
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

@endsection
