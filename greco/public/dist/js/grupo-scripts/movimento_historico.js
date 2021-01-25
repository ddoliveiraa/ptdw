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

var split = window.location.href.split("/");
var isServer = "";
for (x of split){
    if(x == "~ptdw-2020-gr3"){
        isServer = "/~ptdw-2020-gr3";
    }
}


var entradas = $("#entradas").DataTable({
    "dom": '<"search">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": isServer + "/movimentos/historico/getEntradas/",
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

    var pictogramas = [];
    $('input[type=checkbox]:checked').each(function(){
        pictogramas.push($(this).val());
    });
    
    data.pictogramas = pictogramas;
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
    saidas.draw();
});
$('#intervalo').on('cancel.daterangepicker', function(ev, picker) {
    $(this).val('Periodo');
    entradas.draw();
    saidas.draw();
});

$('#sub-familia').hide(1);
$("#pictogramas").show(1);
$('#filter').click(function () {
    $('#familia').val('Familia');
    $('#sub-familia').val('Sub-Familia');
    $('#sub-familia').hide(1);
    $("#pictogramas").show(1);
    $('#movimento').val('Movimento');
    $('input[type=checkbox]').prop('checked', false);
    $('#intervalo').val('Periodo');
    entradas.search('');
    saidas.search('');
    entradas.draw();
    saidas.draw();
});

$("#pictogramas").click(function () {
    $("#modalSelecionarPictograma").modal("show");
});
$('input[type=checkbox]').on('change', function(e) {
    if ($('input[type=checkbox]:checked').length > 1) {
        $(this).prop('checked', false);
    }
});
$("#aplicar").click(function () {
    entradas.draw();
    saidas.draw();
});


$('#familia').change(function () {
    var familia = $('#familia option:selected').val();
    if (familia == "Não Químico") {
        $('#sub-familia').show(1);
        $("#pictogramas").hide(1);
        $('input[type=checkbox]').prop('checked', false);
    } else {
        $('#sub-familia').hide(1);
        $('#sub-familia').val('Sub-Familia');
        $("#pictogramas").show(1);
    }
    entradas.draw();
    saidas.draw();
});
$('#sub-familia').change(function () {
    entradas.draw();
    saidas.draw();
});


var saidas = $("#saidas").DataTable({
    "dom": '<"search">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": isServer + "/movimentos/historico/getSaidas/",
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
saidas.on('preXhr.dt', function (e, settings, data) {
    data.familiass = $('#familia').val();
    data.subfamiliass = $('#sub-familia').val();
    data.inicio = $('#intervalo').data('daterangepicker').startDate.format("DD/MM/YYYY");
    data.fim = $('#intervalo').data('daterangepicker').endDate.format("DD/MM/YYYY");
    data.data_val = $('#intervalo').val();

    var pictogramas = [];
    $('input[type=checkbox]:checked').each(function(){
        pictogramas.push($(this).val());
    });
    
    data.pictogramas = pictogramas;
});

