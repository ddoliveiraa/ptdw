@extends('layout')

@section('stylesheets')

    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">{{ __('lang.movimentos') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.registar entrada') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center display-4">{{ __('lang.registar entrada') }}</h2>
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
                                            <select id="produto" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }} {{ __('lang.produto') }}</option>
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
                                            <select class="form-control select2bs4" id="n_inventario" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }} {{ __('lang.n de inventario') }}</option>
                                                <option>1234</option>
                                                <option>2137</option>
                                                <option>1223</option>
                                                <option>453</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="referencia">{{ __('lang.referencia') }}</label>
                                            <input type="text" class="form-control" id="referencia"
                                                placeholder="{{ __('lang.insira a') }} {{ __('lang.referencia') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fornecedor">{{ __('lang.fornecedor') }}</label>
                                            <select id="fornecedor" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }} {{ __('lang.fornecedor') }}</option>
                                                <option>Alabama</option>
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
                                            <label for="marca">Marca do Produto</label>
                                            <input type="text" class="form-control" id="marca"
                                                placeholder="Insira o nome do Marca">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="armario">{{ __('lang.armario') }}</label>
                                            <select id="armario" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione o') }} {{ __('lang.armario') }}</option>
                                                <option>Armário 1</option>
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
                                            <select id="prateleira" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>{{ __('lang.selecione a') }} {{ __('lang.prataleira') }}</option>
                                                <option>Prateleira 1</option>
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
                                                <input type="number" class="form-control" id="iva"
                                                    placeholder="{{ __('lang.insira a') }} {{ __('lang.taxa de iva') }}">
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
                                                <input type="number" class="form-control" id="preco"
                                                    placeholder="{{ __('lang.insira o') }} {{ __('lang.preco') }}" step="0.05">
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
                                            <label for="tipo_embalagem">Tipo de Embalagem</label>
                                            <select id="tipo_embalagem" class="form-control select2bs4"
                                                style="width: 100%;">
                                                <option value="" selected disabled>Selecione o Tipo de Embalagem</option>
                                                <option>Frasco</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cap_embalagem">Capacidade da Embalagem</label>
                                            <input type="number" class="form-control" id="cap_embalagem"
                                                placeholder="Insira Capacidade da Embalagem">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="estado">Estado Físico</label>
                                            <select id="estado" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione o Estado Físico</option>
                                                <option>Sólido</option>
                                                <option>Gasoso</option>
                                                <option>Físico</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="textura">Textura/Viscosidade</label>
                                            <select id="textura" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione a Textura/Viscosidade</option>
                                                <option>Viscoso</option>
                                                <option>Granulado</option>
                                                <option>Pouco Viscoso</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cor">Cor</label>
                                            <select id="cor" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione a Cor</option>
                                                <option>Vermelho</option>
                                                <option>Azul</option>
                                                <option>Verde</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="peso">Peso Bruto</label>
                                            <input type="peso" class="form-control" id="peso"
                                                placeholder="Insira o Peso Bruto">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Data de Entrada</label>
                                            <div class="input-group date" id="data_entrada" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_entrada" placeholder="DD/MM/YYYY" />
                                                <div class="input-group-append" data-target="#data_entrada"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">Data de Abertura</label>
                                            <div class="input-group date" id="data_abertura" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_abertura" placeholder="DD/MM/YYYY" />
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
                                            <label for="produto">Data de Validade</label>
                                            <div class="input-group date" id="data_validade" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_validade" placeholder="DD/MM/YYYY" />
                                                <div class="input-group-append" data-target="#data_validade"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="produto">Data de Término</label>
                                            <div class="input-group date" id="data_termino" data-target-input="nearest">
                                                <input type="text" class="form-control datetimepicker-input"
                                                    data-target="#data_termino" placeholder="DD/MM/YYYY" />
                                                <div class="input-group-append" data-target="#data_termino"
                                                    data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="obvs">Observações</label>
                                    <textarea id="obvs" class="form-control" rows="4"></textarea>

                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-default">Cancelar</button>
                                <button type="submit" class="btn btn-primary float-right">Guardar</button>
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
    <script src="../../plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../../plugins/moment/locale/pt.js"></script>

    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            $('#data_entrada').datetimepicker({
                format: 'L',
                locale: 'pt'
            });

            $('#data_abertura').datetimepicker({
                format: 'L',
                locale: 'pt'
            });

            $('#data_termino').datetimepicker({
                format: 'L',
                locale: 'pt'
            });

            $('#data_validade').datetimepicker({
                format: 'L',
                locale: 'pt'
            });
        })

    </script>

@endsection
