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
                        <li class="breadcrumb-item"><a href="#">Movimentos</a></li>
                        <li class="breadcrumb-item active">Registo Entrada</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center display-4">Registo Entrada</h2>
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
                                            <label for="produto">Produto</label>
                                            <select id="produto" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione o Produto</option>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="n_inventario">Nº de Inventário</label>
                                            <select class="form-control select2bs4" id="n_inventario" style="width: 100%;">
                                                <option value="" selected disabled>Selecione o nº do Inventário</option>
                                                <option>1234</option>
                                                <option>2137</option>
                                                <option>1223</option>
                                                <option>453</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="referencia">Referência</label>
                                            <input type="text" class="form-control" id="referencia"
                                                placeholder="Insira a Referência">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fornecedor">Fornecedor</label>
                                            <select id="fornecedor" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione o Fornecedor</option>
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
                                            <label for="armario">Armário</label>
                                            <select id="armario" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione o Armário</option>
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
                                            <label for="prateleira">Prateleira</label>
                                            <select id="prateleira" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione a Prateleira</option>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="iva">Taxa de Iva</label>
                                            <input type="number" class="form-control" id="iva"
                                                placeholder="Insira Taxa de Iva">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="preco">Preço</label>
                                            <input type="number" class="form-control" id="preco"
                                                placeholder="Insira o Preço">
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
                                            <label for="textura">Textura/Viscosidade</label>
                                            <select id="textura" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione a Textura/Viscosidade</option>
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
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cor">Cor</label>
                                            <select id="cor" class="form-control select2bs4" style="width: 100%;">
                                                <option value="" selected disabled>Selecione a Cor</option>
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
                                                    data-target="#data_entrada" />
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
                                                    data-target="#data_abertura" />
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
                                                    data-target="#data_validade" />
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
                                                    data-target="#data_termino" />
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
                                <button type="submit" class="btn btn-primary">Guardar</button>
                                <button type="submit" class="btn btn-default float-right">Cancelar</button>
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
