@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
                        <li class="breadcrumb-item"><a href="">{{ __('lang.movimentos') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.ver') }} {{ __('lang.entrada') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.ver') }} {{ __('lang.entrada') }}</h1>
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
                                            <select id="produto" class="form-control select2bs4" style="width: 100%;"
                                                disabled>
                                                <option selected>Cloreto de Hidrogénio</option>
                                                <option>Cloreto de Sódio</option>
                                                <option>Hidróxido de Carbono</option>
                                                <option>Cloreto de Ferro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="n_inventario">{{ __('lang.n de inventario') }}</label>
                                            <select class="form-control select2bs4" id="n_inventario" style="width: 100%;"
                                                disabled>
                                                <option selected>1234</option>
                                                <option>2137</option>
                                                <option>1223</option>
                                                <option>453</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="referencia">{{ __('lang.referencia') }}</label>
                                            <input type="text" class="form-control" id="referencia" value="12355362"
                                                disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                            <select id="fornecedor" class="form-control select2bs4" style="width: 100%;"
                                                disabled>
                                                <option selected>Alabama</option>
                                                <option>Alaska</option>
                                                <option>California</option>
                                                <option>Delaware</option>
                                                <option>Tennessee</option>
                                                <option>Texas</option>
                                                <option>Washington</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="marca">{{ __('lang.nome da marca') }}</label>
                                            <input type="text" class="form-control" id="marca" value="eXpolsions" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="armario">{{ __('lang.armario') }}</label>
                                            <select id="armario" class="form-control select2bs4" style="width: 100%;"
                                                disabled>
                                                <option selected>Armário 1</option>
                                                <option>Armário 2</option>~
                                                <option>Armário 3</option>
                                                <option>Frigorífico 1</option>
                                                <option>Frigorífico 2</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="prateleira">{{ __('lang.prataleira') }}</label>
                                            <select id="prateleira" class="form-control select2bs4" style="width: 100%;"
                                                disabled>
                                                <option selected>Prateleira 1</option>
                                                <option>Prateleira 2</option>~
                                                <option>Prateleira 3</option>
                                                <option>Gaveta 1</option>
                                                <option>Gaveta 2</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="iva">{{ __('lang.taxa de iva') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="iva" value="23" disabled>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-percentage"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="preco">{{ __('lang.preco') }}</label>
                                            <div class="input-group">
                                                <input type="number" class="form-control" id="preco" value="25,35"
                                                    step="0.05" disabled>
                                                <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fa fa-euro-sign"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tipo_embalagem">{{ __('lang.tipo de embalagem') }}</label>
                                            <select id="tipo_embalagem" class="form-control select2bs4"
                                                style="width: 100%;" disabled>
                                                <option selected>Frasco</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cap_embalagem">{{ __('lang.capacidade da embalagem') }}</label>
                                            <input type="number" class="form-control" id="cap_embalagem"
                                                value="250" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="estado">{{ __('lang.estado fisico') }}</label>
                                            <select id="estado" class="form-control select2bs4" style="width: 100%;" disabled>
                                                <option >Sólido</option>
                                                <option>Gasoso</option>
                                                <option selected>Liquido</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textura">{{ __('lang.textura/viscosidade') }}</label>
                                            <select id="textura" class="form-control select2bs4" style="width: 100%;" disabled>
                                                <option>Viscoso</option>
                                                <option>Granulado</option>
                                                <option selected>Pouco Viscoso</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cor">Cor</label>
                                            <select id="cor" class="form-control select2bs4" style="width: 100%;" disabled>
                                                <option>Vermelho</option>
                                                <option>Azul</option>
                                                <option>Verde</option>
                                                <option selected>Transparent</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="peso">{{ __('lang.peso bruto') }}</label>
                                            <input type="number" class="form-control" id="peso"
                                                value="300" disabled>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>{{ __('lang.data de entrada') }}</label>
                                            <div class="input-group date" id="data_entrada" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_entrada" value="22/7/2020" disabled/>
                                                <div class="input-group-append" data-target="#data_entrada"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de abertura') }}</label>
                                            <div class="input-group date" id="data_abertura" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_abertura" value="30/7/2020" disabled/>
                                                <div class="input-group-append" data-target="#data_abertura"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de validade') }}</label>
                                            <div class="input-group date" id="data_validade" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_validade" value="9/12/2020" disabled/>
                                                <div class="input-group-append" data-target="#data_validade"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">{{ __('lang.data de termino') }}</label>
                                            <div class="input-group date" id="data_termino" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_termino" value="---------" disabled/>
                                                <div class="input-group-append" data-target="#data_termino"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="obvs">{{ __('lang.observacoes') }}</label>
                                    <textarea id="obvs" class="form-control" rows="4" disabled>👀 Está a observar uma observação muito observavel, escrito por um observador de um observatório muito observente. 👀</textarea>
                                </div>
                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="/movimentos/historico"
                                            role="button" class="btn btn-block btn-default">{{ __('lang.voltar') }}</a>
                                    </div>
                                    <div class="ml-auto col-3">
                                        <a href="/movimentos/editar" role="button"
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
    <script src="../plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="../plugins/moment/moment.min.js"></script>
    <script src="../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../plugins/moment/locale/pt.js"></script>
    <script src="../plugins/moment/locale/en-gb.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            // $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

    </script>

@endsection
