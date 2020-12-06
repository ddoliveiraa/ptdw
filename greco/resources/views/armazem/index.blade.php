@extends('layout')

@section('stylesheets')
    

@endsection

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-left">
                        <li class="breadcrumb-item"><a href="/welcome">Home</a></li>
                        <li class="breadcrumb-item active">{{ __('lang.armazem') }}</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h1 class="text-center display-4">{{ __('lang.armazem') }}</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Laboratório A24</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('lang.localizacoes') }}</h3>
                                </div>
                                <div class="card-body">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="card-title">{{ __('lang.produtos') }}</h3>
                                </div>
                                <div class="card-body">
                                    <!-- we are adding the accordion ID so Bootstrap's collapse plugin detects it -->
                                    <div id="accordion">
                                        <div class="card-secondary">
                                            <div class="card-header">
                                                <h3 class="card-title w-100">
                                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseOne">
                                                        {{ __('lang.produtos-quimicos') }}
                                                    </a>

                                                </h3>
                                            </div>
                                            <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ __('lang.produtos-quimicos') }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-secondary">
                                            <div class="card-header">
                                                <h3 class="card-title w-100">
                                                    <a class="d-block w-100" data-toggle="collapse" href="#collapseTwo">
                                                        {{ __('lang.produtos-n-quimicos') }}
                                                    </a>

                                                </h3>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{ __('lang.produtos-n-quimicos') }}
                                                </div>
                                            </div>
                                        </div>
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

    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>

    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>

    <!-- Language DatePicker -->
    <script src="../../plugins/moment/locale/pt.js"></script>
    <script src="../../plugins/moment/locale/en-gb.js"></script>

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

            $('.date').datetimepicker({
                format: 'L',
                locale: "{{ __('lang.locale-date') }}"
            });
        })

    </script>

@endsection
