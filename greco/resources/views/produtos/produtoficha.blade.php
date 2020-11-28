@extends('layout')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="ficha">
                <div class="card card-primary">
                    <div class="card-header">
                        <h2 class="card-title-large">Cloreto de Hidrogénio</h2>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                        <div class="card-body">
                            <div class="informacao">
                                <div class="form-group">
                                    <label for="formula">Fórmula</label>
                                    <input type="text" class="form-control" id="formula" placeholder="HCL">
                                </div>
                                <div class="form-group">
                                    <label for="designacao">Designação</label>
                                    <input type="text" class="form-control" id="designacao"
                                        placeholder="Cloreto de Hidrogenio">
                                </div>
                                <div class="form-group">
                                    <label for="moles">Peso Molecular</label>
                                    <input type="text" class="form-control" id="moles" placeholder="36.46 g/mol">
                                </div>
                                <div class="form-group">
                                    <label for="cas">Nº CAS</label>
                                    <input type="text" class="form-control" id="cas" placeholder="7647-01-1">
                                </div>
                                <div class="form-group">
                                    <label for="unidades">Unidades</label>
                                    <input type="text" class="form-control" id="unidades" placeholder="mililitros">
                                </div>
                                <div class="form-group">
                                    <label for="vent">Arm.Ventilado</label>
                                    <input type="text" class="form-control" id="vent" placeholder="Não Necessita">
                                </div>
                                <div class="form-group">
                                    <label for="condicoes">Condições de Armazenamento</label>
                                    <input type="text" class="form-control" id="condicoes" placeholder="Não Necessita">
                                </div>
                            </div>
                            <div class="stock">

                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
