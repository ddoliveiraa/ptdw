var locale = $('#navbarDropdown').text().trim();
var datatables_lang;
if (locale == "PT") {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json';
}
else {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json';
}

var entradas = $("#entradas").DataTable({
    "dom": '<"search">frtip',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/movimentos/historico/getEntradas/",
    "columns": [
        { data: 'designacao' },
        { data: 'id_produto' },
        { data: 'armario' },
        { data: 'capacidade' },
        { data: 'fornecedor' },
        { data: 'data_entrada' },
        { data: 'data_validade' },
        { data: 'data_termino' },
        { data: 'operador' },
        { data: 'familia' },
        { data: 'subfamilia' },
        { data: 'link' },
    ],
    "language": {
        "url": datatables_lang,
    },
    "order": [[5, 'desc']],
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    /* "columnDefs": [{
        "targets": [3, 6, 10, 11, 12],
        "visible": false
    },
    {
        "targets": [7, 8, 9],
        "type": 'date-us'
    }
    ], */
    "buttons": [{
        extend: 'csvHtml5',
        exportOptions: {
            columns: ':visible:not(:last-child)'
        }
    },
    {
        extend: 'print',
        exportOptions: {
            columns: ':visible:not(:last-child)'
        }
    },
    ],
    "initComplete": function () {
        entradas.buttons().container().appendTo('#entradas_filter');
        //filtragem por movimentos
        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var movimento = $('#movimento option:selected').val();
                var movimentos = searchData[1]; // using the data from the 2nd column

                if (movimento == movimentos) {
                    return movimentos;
                } else if (movimento == "Movimento") {
                    return true;
                }
                return false;
            }
        );

        //filtragem por familia
        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var familia = $('#familia option:selected').val();
                var familias = searchData[11]; // using the data from the 12th column

                if (familia == familias) {
                    return familias;
                } else if (familia == "Familia") {
                    return true;
                }
                return false;
            }
        );
        //filtragem por sub-familia
        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var subfamilia = $('#sub-familia option:selected').val();
                var subfamilias = searchData[12]; // using the data from the 13th column

                if (subfamilia == subfamilias) {
                    return subfamilias;
                } else if (subfamilia == "Sub-Familia") {
                    return true;
                }
                return false;
            }
        );

        jQuery.extend(jQuery.fn.dataTableExt.oSort, {
            "date-uk-pre": function (a) {
                var ukDatea = a.split('/');
                return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
            },

            "date-uk-asc": function (a, b) {
                return ((a < b) ? -1 : ((a > b) ? 1 : 0));
            },

            "date-uk-desc": function (a, b) {
                return ((a < b) ? 1 : ((a > b) ? -1 : 0));
            }
        });

        //Date range picker
        $('#intervalo').daterangepicker({
            timePicker: false,
            locale: {
                format: 'DD/MM/YYYY'
            }
        })

        $('#sub-familia').hide(1);
        $("#pictogramas").show(1);
        $('#filter').click(function () {
            $('#familia').val('Familia');
            $('#sub-familia').val('Sub-Familia');
            $('#movimento').val('Movimento');
            $('input[type=checkbox]').prop('checked', false);
            entradas.search('');
            entradas.draw();
        });
        $('#movimento').change(function () {
            entradas.draw();
        });

        $("#pictogramas").click(function () {
            $("#modalSelecionarPictograma").modal("show");
        })

        $('#familia').change(function () {
            var familia = $('#familia option:selected').val();
            console.log("familia selecionada: " + familia);
            if (familia == "Não Químico") {
                $('#sub-familia').show(1);
                $("#pictogramas").hide(1);
            } else {
                $('#sub-familia').hide(1);
                $('#sub-familia').val('Sub-Familia');
                $("#pictogramas").show(1);
            }
            entradas.draw();
        });
        $('#sub-familia').change(function () {
            entradas.draw();
        });

        $('#intervalo').on('apply.daterangepicker', function () {
            $.fn.dataTable.ext.search.push(
                function (settings, searchData, index, rowData, counter) {
                    var inicio = $('#intervalo').data('daterangepicker')
                        .startDate.format("DD/MM/YYYY");
                    var fim = $('#intervalo').data('daterangepicker').endDate
                        .format("DD/MM/YYYY");
                    var datas = moment(new Date(searchData[7]),
                        "DD/MM/YYYY") // using the data from the 8th column
                    console.log('incio = ' + inicio, ', ' + 'fim = ' + fim);
                    console.log(datas);

                    if ((isNaN(inicio) && isNaN(fim)) ||
                        (isNaN(inicio) && datas <= fim) ||
                        (inicio <= datas && isNaN(fim)) ||
                        (inicio <= datas && datas <= fim)) {
                        return true;
                    }
                    return false;
                }
            );
            entradas.draw();
        });
    }
});

var saidas = $("#saidas").DataTable({
    "dom": '<"search">frtip',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/movimentos/historico/getSaidas/",
    "columns": [
        { data: 'designacao' },
        { data: 'id_produto' },
        { data: 'cliente' },
        { data: 'solicitante' },
        { data: 'operador' },
        { data: 'data' },
        { data: 'familia' },
        { data: 'subfamilia' },
        { data: 'link' },
    ],
    "language": {
        "url": datatables_lang,
    },
    /* "order": [[5, 'desc']], */
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "buttons": [{
        extend: 'csvHtml5',
        exportOptions: {
            columns: ':visible:not(:last-child)'
        }
    },
    {
        extend: 'print',
        exportOptions: {
            columns: ':visible:not(:last-child)'
        }
    },
    ],
    "initComplete": function () {
        saidas.buttons().container().appendTo('#saidas_filter');
    }
});

