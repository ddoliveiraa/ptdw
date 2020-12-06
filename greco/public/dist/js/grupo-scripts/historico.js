$(function() {
    $("#historico").DataTable({
        "columnDefs": [{
            "visible": false,
            "targets": [9,10],
        }],
        "dom": '<"toolbar">frtip',
        "info": false,
        "responsive": true,
        "lengthChange": false,
        "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().prependTo('#historico_paginate');

    //filtragem por movimentos
    $.fn.dataTable.ext.search.push(
        function(settings, searchData, index, rowData, counter) {
            var movimento = $('#movimento option:selected').val();
            var movimentos = searchData[7]; // using the data from the 7th column

            if (movimento == movimentos) {
                return movimentos;
            } else if (movimento == "Entradas e Saídas") {
                return true;
            }
            return false;
        }
    );

    //filtragem por familia
    $.fn.dataTable.ext.search.push(
        function(settings, searchData, index, rowData, counter) {
            var familia = $('#familia option:selected').val();
            var familias = searchData[9]; // using the data from the 9th column

            if (familia == familias) {
                return movimentos;
            } else if (familia == "Familia") {
                return true;
            }
            return false;
        }
    );
    //filtragem por sub-familia
    $.fn.dataTable.ext.search.push(
        function(settings, searchData, index, rowData, counter) {
            var subfamilia = $('#sub-familia option:selected').val();
            var subfamilias = searchData[10]; // using the data from the 10th column

            if (subfamilia == subfamilias) {
                return movimentos;
            } else if (subfamilia == "Sub-Familia") {
                return true;
            }
            return false;
        }
    );


    //Date range picker
    $('#intervalo').daterangepicker({
        timePicker: false,
        locale: {
            format: 'MM/DD/YYYY'
        }
    })

    //criação e inserção do botão pictogramas dentro da div da datatables
    var pictogramas = $("<button></button>").attr('id', 'pictogramas');
    pictogramas.addClass('btn btn-secondary col-md-2 float-right');
    $("div.toolbar").append(pictogramas);
    $("#pictogramas").text('Pictogramas');

    //Inserção do daterangepicker dentro da div da datatable
    $("div.toolbar").append($("#intervalo"));

    //criação e inserção da combobox movimentos dentro da div da datatable
    var movimentos = $("<select></select>").attr('id', 'movimento');
    movimentos.addClass('tools custom-select  float-right');
    $('div.toolbar').append(movimentos);
    $('#movimento').append(new Option("{{ __('lang.entradas e saidas') }}",
        "Entradas e Saídas"));
    $('#movimento').append(new Option("{{ __('lang.entrada') }}", "Entrada"));
    $('#movimento').append(new Option("{{ __('lang.saida') }}", "Saída"));

    //criação e inserção da combobox sub-familia dentro da div da datatable
    var subfamilia = $("<select></select>").attr('id', 'sub-familia');
    subfamilia.addClass('tools custom-select  float-right');
    $('div.toolbar').append(subfamilia);
    $('#sub-familia').append(new Option("Sub-Familia",
        "Sub-Familia"));
    $('#sub-familia').append(new Option("Vidro", "Vidro"));
    $('#sub-familia').append(new Option("Plástico", "Plástico"));
    $('#sub-familia').append(new Option("Metal", "Metal"));
    $('#sub-familia').append(new Option("Outros", "Outros"));


    //criação e inserção da combobox familia dentro da div da datatable
    var familia = $("<select></select>").attr('id', 'familia');
    familia.addClass('tools custom-select  float-right');
    $('div.toolbar').append(familia);
    $('#familia').append(new Option("Familia",
        "Familia"));
    $('#familia').append(new Option("{{ __('lang.quimicos') }}", "Sim"));
    $('#familia').append(new Option("{{ __('lang.nao quimicos') }}", "Não"));




    $(document).ready(function() {
        var table = $('#historico').DataTable();
        $('#movimento').change(function() {
            table.draw();
        });
        $('#familia').change(function() {
            table.draw();
        });
        $('#sub-familia').change(function() {
            table.draw();
        });
        /*                 $('#intervalo').on('apply.daterangepicker', function() {
                            $.fn.dataTable.ext.search.push(
                                function(settings, searchData, index, rowData, counter) {
                                    var inicio = $('#intervalo').data('daterangepicker').startDate
                                        .format("DD-MM-YYYY");
                                    var fim = $('#intervalo').data('daterangepicker').endDate.format(
                                        "DD-MM-YYYY");
                                    var datas = searchData[6]; // using the data from the 6th column
                                    console.log('incio = ' + inicio, ', ' + 'fim = ' + fim);

                                    if ((isNaN(inicio) && isNaN(fim)) ||
                                        (isNaN(inicio) && datas <= fim) ||
                                        (inicio <= datas && isNaN(fim)) ||
                                        (inicio <= datas && datas <= fim)) {
                                        return true;
                                    }
                                    return false;
                                }
                            );
                            table.draw();
                        }); */
    });
});
