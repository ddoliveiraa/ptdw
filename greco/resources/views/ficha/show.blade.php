@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
  <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        {{-- <li class="breadcrumb-item"><a href="#">{{ __('lang.resultados') }}</a></li> --}}
                        <li class="breadcrumb-item active">HCL</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-left display-4">{{ __('lang.ficha do produto') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">

                    <div class="card card-light">
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
                                            <label for="formula">{{ __('lang.formula') }}</label>
                                            <input type="text" class="form-control" id="formula" value="HCL" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="designacao">{{ __('lang.designacao') }}</label>
                                            <input type="text" class="form-control" id="designacao"
                                                value="Cloreto de Hidrogenio" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="moles">{{ __('lang.peso molecular') }}</label>
                                            <input type="text" class="form-control" id="moles" value="36.46 g/mol" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="cas">{{ __('lang.n cas') }}</label>
                                            <input type="text" class="form-control" id="cas" value="7647-01-1" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="unidades">{{ __('lang.unidades') }}</label>
                                            <input type="text" class="form-control" id="unidades" value="mililitros"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="vent">{{ __('lang.armario ventilado') }}</label>
                                            <input type="text" class="form-control" id="vent" value="Não Necessita"
                                                readonly>
                                        </div>
                                        <div class="form-group">
                                            <label for="condicoes">{{ __('lang.condicoes de armazenamento') }}</label>
                                            <input type="text" class="form-control" id="condicoes" value="Não Necessita"
                                                readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="pictogramas">
                                            <img src="{{ public_path() }}/dist/img/Pictogramas/Harmful.png" alt="Harmful">
                                            <img src="{{ public_path() }}/dist/img/Pictogramas/Corrosive.png" alt="Corrosive">
                                        </div>
                                        <div class="stock-box">
                                            <h5 class="bg-dark">{{ __('lang.n de inventario') }}</h5>
                                            <h4>1357</h4>
                                        </div>
                                        <div class="stock-box">
                                            <h5 class="bg-dark">{{ __('lang.stock existente') }}</h5>
                                            <h4>20</h4>
                                        </div>
                                        <div class="stock-box">
                                            <h5 class="bg-dark">{{ __('lang.stock minimo') }}</h5>
                                            <h4>3</h4>
                                        </div>
                                        <div class="stock-button">
                                            <a href="{{ public_path() }}/ficha/editar" class="btn btn-secondary btn-block" role="button">{{ __('lang.editar') }}</a>
                                            <button type="submit" class="btn btn-block btn-danger">{{ __('lang.desativar') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        
                            
                        
                        <div class="card-body">
                            <h3>Embalagens</h3>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.capacidade') }}</th>
                                        <th>{{ __('lang.n de ordem') }}</th>
                                        <th>{{ __('lang.armario') }}</th>
                                        <th>{{ __('lang.prataleira') }}</th>
                                        <th>{{ __('lang.data de abertura') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>500 ml</td>
                                        <td>3</td>
                                        <td>5</td>
                                        <td>4</td>
                                        <td>22/10/2020</td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>250 ml</td>
                                        <td>5</td>
                                        <td>8</td>
                                        <td>10</td>
                                        <td>5/11/2020</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>125 ml</td>
                                        <td>10</td>
                                        <td>3</td>
                                        <td>6</td>
                                        <td>1/11/2020</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="avisos">
                                        <h5 class="bg-dark">{{ __('lang.advertencias de perigo') }}</h5>
                                        <p>H290 - Corrosivo a metais</p>
                                        <p>H314 - Corrosivo à pele e olhos</p>
                                        <p>H335 - Causa irritação respiratória</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avisos">
                                        <h5 class="bg-dark">{{ __('lang.recomendacoes de prudencia') }}</h5>
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
    <script src="{{ public_path() }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ public_path() }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ public_path() }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ public_path() }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ public_path() }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
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
