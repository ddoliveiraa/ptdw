@extends('layout')

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-left">
                    <li class="breadcrumb-item active"><a href="#">Home</a></li>
                </ol>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2 class="text-center display-4">Pesquisa</h2>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="ficha">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Pesquise por um produto...">
                        <div class="input-group-append">
                            <select class="search-fliter custom-select" name="" id="">
                                <option value="todos">Todos</option>
                                <option value="quimica">Químicos</option>
                                <option value="naoquimico">Não Químicos</option>
                            </select>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-lg btn-default">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection