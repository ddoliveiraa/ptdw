@extends('layout')

@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item active"><a href="{{ public_path() }}">Home</a></li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4 text-secondary">{{ __('lang.pesquisa') }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <select class="search-fliter form-control select" name="filtro" id="filtro">
                                <option value="todos">{{ __('lang.todos') }}</option>
                                <option value="quimico">{{ __('lang.quimicos') }}</option>
                                <option value="naoquimico">{{ __('lang.nao quimicos') }}</option>
                            </select>
                        </div>
                        <input type="search" id="search" name="search" class="form-control form-control-lg"
                            placeholder="{{ __('lang.pesquise por um produto...') }}">
                    </div>
                    <div id="searchResults">
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{ public_path() }}/dist/js/grupo-scripts/search.js"></script>
@endsection
