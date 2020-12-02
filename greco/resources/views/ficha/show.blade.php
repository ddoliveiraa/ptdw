@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Resultados</a></li>
                        <li class="breadcrumb-item active">HCL</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h2 class="text-center display-4">Ficha do Produto</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h2 class="card-title-large">Cloreto de Hidrogénio</h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="formula">Fórmula</label>
                                            <input type="text" class="form-control" id="formula" value="HCL" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="designacao">Designação</label>
                                            <input type="text" class="form-control" id="designacao"
                                                value="Cloreto de Hidrogenio" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="moles">Peso Molecular</label>
                                            <input type="text" class="form-control" id="moles" value="36.46 g/mol" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="cas">Nº CAS</label>
                                            <input type="text" class="form-control" id="cas" value="7647-01-1" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="unidades">Unidades</label>
                                            <input type="text" class="form-control" id="unidades" value="mililitros"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="vent">Armário Ventilado</label>
                                            <input type="text" class="form-control" id="vent" value="Não Necessita"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="condicoes">Condições de Armazenamento</label>
                                            <input type="text" class="form-control" id="condicoes" value="Não Necessita"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="stock-box">
                                            <h3 class="bg-secondary">Nº de Inventário</h3>
                                            <h4>1357</h4>
                                        </div>
                                        <div class="stock-box">
                                            <h3 class="bg-secondary">Stock Existente</h3>
                                            <h4>20</h4>
                                        </div>
                                        <div class="stock-box">
                                            <h3 class="bg-secondary">Stock Minimo</h3>
                                            <h4>3</h4>
                                        </div>
                                        <div class="stock-button">
                                            <a href="/ficha/editar"><input type="button" class="btn btn-block btn-primary"
                                                    value="Editar"></a>
                                            <button type="submit" class="btn btn-block btn-danger">Desativar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                            
                        
                        <div class="card-body">
                            <h3>Embalagens</h3>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="bg-secondary">
                                    <tr>
                                        <th>Capacidade</th>
                                        <th>Nº de Ordem</th>
                                        <th>Armário</th>
                                        <th>Prataleira</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Capacidade</th>
                                        <th>Nº de Ordem</th>
                                        <th>Armário</th>
                                        <th>Pratleira</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="avisos">
                                        <h3 class="bg-secondary">Avisos</h3>
                                        <div class="pictogramas">
                                            <img src="../../dist/img/Pictogramas/Harmful.png" alt="Harmful">
                                            <img src="../../dist/img/Pictogramas/Corrosive.png" alt="Corrosive">
                                        </div>
                                        <p>H290 - Corrosivo a metais</p>
                                        <p>H314 - Corrosivo à pele e olhos</p>
                                        <p>H335 - Causa irritação respiratória</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avisos">
                                        <h3 class="bg-secondary">Precauções</h3>
                                        <p>P280 - Usar luvas e oculos de proteção</p>
                                        <p>P303+361+353 - Se entrar em contacto com a pele, remova roupa contaminada e lave
                                            a
                                            pele.s
                                        </p>
                                        <p>P305+351+338 - Se entrar nos olhos, lave os olhos e remove os lentes de contacto
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $('#example1').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
@endsection
