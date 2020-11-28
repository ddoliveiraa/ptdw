@extends('layout')

@section('content')
<section class="content">
    <div class="container-fluid">
        <h2 class="text-center display-4">Pesquisa</h2>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form action="simple-results.html">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-lg" placeholder="Pesquise por um produto...">
                        <div class="input-group-append">
                            <select class="search-fliter" name="" id="">
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