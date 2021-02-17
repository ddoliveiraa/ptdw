@extends('layout')

@section('stylesheets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ public_path() }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ public_path() }}/dist/css/toastr.css"/>
@endsection

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="{{ public_path() }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ public_path() }}/produtos">{{ __('lang.produtos') }}</a>
                        @if($produto->get_fam->nome == "Químico")
                            <li class="breadcrumb-item active">{{ $produto->formula }}</li>
                        @else
                            <li class="breadcrumb-item active">{{ $produto->designacao }}</li>
                        @endif
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
                            
                            <h2 class="card-title-large">{{ $produto->designacao }}<span class="float-right text-primary">{{$produto->get_fam->nome}}</span></h2>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="produto_designacao"
                                                class="control-label">{{ __('lang.designacao') }}</label>
                                            <input type="text" class="form-control" id="produto_designacao" tabindex="1"
                                                readonly value="{{ $produto->designacao }}">
                                        </div>
                                        @if($produto->get_fam->nome == "Químico")
                                            <div class="form-group">
                                                <label for="produto_formula"
                                                class="control-label">{{ __('lang.formula') }}</label>
                                                <input type="text" class="form-control" id="produto_formula" tabindex="3"
                                                readonly value="{{ $produto->formula }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="produto_cas" class="control-label">{{ __('lang.n cas') }}</label>
                                                <input type="text" class="form-control" id="produto_cas" tabindex="4" readonly
                                                value="{{ $produto->CAS }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="produto_peso"
                                                class="control-label">{{ __('lang.peso molecular') }}</label>
                                                <input type="text" class="form-control" id="produto_peso" tabindex="5" readonly
                                                value="{{ $produto->peso_molecular }}">
                                            </div>
                                            <div class="form-group">
                                                <label for="produto_condicoes_armazenamento"
                                                class="control-label">{{ __('lang.condicoes de armazenamento') }}</label>
                                                <select class="form-control" id="produto_armario" tabindex="6" disabled>
                                                <option value="{{ $produto->condicoes_armazenamento }}">{{ $produto->get_condicao->condicao }}</option>
                                                </select>
                                            </div>
                                        
                                            @if ($produto->ventilado == true)
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" checked data-toggle="toggle" class="custom-control-input" id="customSwitch1"
                                                            disabled tabindex="7">
                                                            <label class="custom-control-label"
                                                            for="customSwitch1" value="{{ $produto->ventilado }}">{{ __('lang.armario ventilado') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customSwitch1"
                                                            disabled tabindex="7">
                                                            <label class="custom-control-label"
                                                            for="customSwitch1" value="{{ $produto->ventilado }}">{{ __('lang.armario ventilado') }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @else
                                            <div class="form-group">
                                                <label for="familia"
                                                class="control-label">{{ __('lang.familia') }}</label>
                                                <input type="text" class="form-control" id="familia" tabindex="2"
                                                readonly value="{{ $produto->get_subfam->nome }}">
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-md-4">
                                        @if($produto->get_fam->nome == "Químico")
                                            <div class="pictogramas">
                                            @foreach ($produto->pictogramas as $pictograma)
                                                <img src="{{ public_path() }}{{ $pictograma->imagem }}" alt="{{ $pictograma->nome }}">
                                            @endforeach
                                            </div>
                                        @else
                                            <div class="pictogramas">
                                                <img src="{{ public_path('images') }}\{{ $produto->foto }}" alt="{{ $produto->nome }}">
                                            </div>
                                        @endif 
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="stock-box">
                                                    <h5 class="bg-dark">{{ __('lang.n de inventario') }}</h5>
                                                    <h4>{{ $produto->id }}</h4>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stock-box">
                                                    <h5 class="bg-dark">{{ __('lang.stock existente') }}</h5>
                                                    <h4>{{ $produto->stock }}</h4>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="stock-box">
                                                    <h5 class="bg-dark">{{ __('lang.stock minimo') }}</h5>
                                                    <h4>{{ $produto->stock_min }}</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="stock-button">
                                            @if($produto->get_fam->nome == "Químico")
                                                <a href="{{ public_path() }}/ficha/editar/{{$produto->id}}" class="btn btn-secondary btn-block"
                                                    role="button" tabindex="8">{{ __('lang.editar') }}</a>
                                            @else
                                                <a href="{{ public_path() }}/ficha/editar_nq/{{$produto->id}}" class="btn btn-secondary btn-block"
                                                    role="button" tabindex="8">{{ __('lang.editar') }}</a>
                                            @endif
                                                <button type="submit" class="btn btn-block btn-danger"
                                                    tabindex="9">{{ __('lang.desativar') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="card-body">
                            <h3>Embalagens</h3>
                            <table id="existencias" class="table table-bordered table-striped">
                                <thead class="bg-dark">
                                    <tr>
                                        <th>{{ __('lang.capacidade') }}</th>
                                        <th>{{ __('lang.n de ordem') }}</th>
                                        <th>{{ __('lang.armario') }}</th>
                                        <th>{{ __('lang.prataleira') }}</th>
                                        <th>{{ __('lang.data de abertura') }}</th>
                                        <th>{{ __('lang.data de validade') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($produto->entradas as $entrada)
                                    @if(empty($entrada->data_termino))  
                                            <tr>
                                                <td>{{ $entrada->capacidade }} ml</td>
                                                <td>{{ $entrada->id_ordem }}</td>
                                                <td>{{ $entrada->get_armario->armario }}</td>
                                                <td>{{ $entrada->get_prateleira->prateleira }}</td>
                                                <td>{{ $entrada->data_abertura }}</td>
                                                @if($time > $entrada->data_validade)
                                                    <td class="text-danger">
                                                @else 
                                                    <td>
                                                @endif 
                                                    {{ date('d/m/Y', strtotime($entrada->data_validade)) }}
                                                </td>
                                            </tr>
                                    @endif
                                @endforeach   
                                </tbody>
                            </table>
                        </div>
                        <div class="card-body">
                            <div class="row">
                            @if($produto->get_fam->nome == "Químico")
                                <div class="col-md-6">
                                    <div class="avisos">
                                   
                                        <h5 class="bg-dark">{{ __('lang.advertencias de perigo') }}</h5>
                                        @foreach ($produto->advertencias as $advertencia)
                                            <p>{{ $advertencia->texto }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="avisos">
                                        <h5 class="bg-dark">{{ __('lang.recomendacoes de prudencia') }}</h5>
                                        @foreach ($produto->recomendacoes as $recomendacao)
                                        <p>{{ $recomendacao->texto }}</p>
                                        @endforeach
                                    </div>
                                </div>
                                @endif
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

    <script src="{{ public_path() }}/dist/js/grupo-scripts/customDatatables.js"></script>

     <!-- Toastr -->
     <script src="{{ public_path() }}/dist/js/toastr.min.js"></script>

    <script>
        $(function() {

            if('{{ Session::get('status')}}'==='ok'){
                 toastr["success"]("Produto editado com sucesso.", "Produto editado")
            }
        });
    </script>
@endsection
