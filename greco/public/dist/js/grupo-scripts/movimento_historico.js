var locale = $('#navbarDropdown').text().trim();
var datatables_lang;
var todo = "";
if (locale == "PT") {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json';
    todo = "Todos"
}
else {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json';
    todo = "All"
}
$('input[type=checkbox]').on('change', function(e) {
    if ($('input[type=checkbox]:checked').length > 4) {
        $(this).prop('checked', false);
    }
});

var entradas = $("#entradas").DataTable({
    "dom": '<"search">frtip l',
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
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, todo]],
    "autoWidth": false,
    "columnDefs": [{
        "targets": [2, 7, 8, 10],
        "visible": false
    }],
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
        $('#entradas_length').appendTo('#entradas_filter');  
    }
});
entradas.on('preXhr.dt', function (e, settings, data) {
    data.familiass = $('#familia').val();
    data.subfamiliass = $('#sub-familia').val();
    data.inicio = $('#intervalo').data('daterangepicker').startDate.format("DD/MM/YYYY");
    data.fim = $('#intervalo').data('daterangepicker').endDate.format("DD/MM/YYYY");
    data.data_val = $('#intervalo').val();
});

//Date range picker
$('#intervalo').daterangepicker({
    autoUpdateInput: false,
    locale: {
        cancelLabel: 'Clear'
    }
});
$('#intervalo').val('Periodo');
$('#intervalo').on('apply.daterangepicker', function(ev, picker) {
    $(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
    entradas.draw();
});
$('#intervalo').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('Periodo');
    entradas.draw();
});

$('#sub-familia').hide(1);
$("#pictogramas").show(1);
$('#filter').click(function () {
    $('#familia').val('Familia');
    $('#sub-familia').val('Sub-Familia');
    $('#movimento').val('Movimento');
    $('input[type=checkbox]').prop('checked', false);
    $('#intervalo').val('Periodo');
    entradas.search('');
    entradas.draw();
});

$("#pictogramas").click(function () {
    $("#modalSelecionarPictograma").modal("show");
})

$('#familia').change(function () {
    var familia = $('#familia option:selected').val();
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


    
/* $('#intervalo').on('apply.daterangepicker', function (ev, picker) {
    $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
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
}); */

var saidas = $("#saidas").DataTable({
    "dom": '<"search">frtip l',
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
    "order": [[5, 'desc']],
    "responsive": true,
    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, todo]],
    "autoWidth": false,
    "columnDefs": [{
        "targets": [6,7],
        "visible": false
    }],
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
        $('#saidas_length').appendTo('#saidas_filter');
    }
});

