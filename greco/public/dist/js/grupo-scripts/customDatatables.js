var locale = $('#navbarDropdown').text().trim();
var datatables_lang;
var Ttodos;
var Tquimico;
var TnaoQuimico;
var todo = "";
if (locale == "PT") {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json';
    Ttodos = "Todos";
    Tquimico = "Químicos";
    TnaoQuimico = "Não Químicos";
    todo = "Todos"
} else {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json';
    Ttodos = "All";
    Tquimico = "Chemicals";
    TnaoQuimico = "Non-Chemicals";
    todo = "All"
}


var produtos = $("#tabelaprodutos").DataTable({
    "dom": '<"toolbar">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/produtos/getProdutos/",
    "columns": [
        { data: 'designacao' },
        { data: 'formula' },
        { data: 'CAS' },
        { data: 'familia' },
        { data: 'stock' },
        { data: 'stock_min' },
        { data: 'id' },
    ],
    "language": {
        "url": datatables_lang,
    },
    "responsive": true,
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, todo]
    ],
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
        produtos.buttons().container().appendTo('div.toolbar');
        var selects = $("<select></select>").attr('id', 'tipo');
        selects.addClass('form-control select col-md-1');
        $('div.toolbar').append(selects);
        $('#tipo').append(new Option(Ttodos, "todos"));
        $('#tipo').append(new Option(Tquimico, "quimico"));
        $('#tipo').append(new Option(TnaoQuimico, "naoquimico"));
        $('#tabelaprodutos_length').appendTo('#tabelaprodutos_filter');

        produtos.on('preXhr.dt', function (e, settings, data) {
            data.tipo = $('#tipo').val();
        });
        $('#tipo').change(function () {
            produtos.draw();
        });
    }
});





// Tabelas com pesquisa e botoes de exportar (Clientes.index, Fornecedores.index)
var clientes = $("#clientes").DataTable({
    "dom": '<"toolbar">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/clientes/getClientes/",
    "columns": [
        {data: 'designacao'},
        {data: 'created_at'},
        {data: 'id'},
    ],
    "language": {
        "url": datatables_lang,
    },
    "responsive": true,
    "lengthChange": true,
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, todo]
    ],
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
        clientes.buttons().container().appendTo('div.toolbar');
        $('#clientes_length').appendTo('#clientes_filter');
    }
});

var fornecedores = $("#fornecedores").DataTable({
    "dom": '<"toolbar">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/fornecedores/getFornecedores/",
    "columns": [
        {data: 'designacao'},
        {data: 'morada'},
        {data: 'localidade'},
        {data: 'codigopostal'},
        {data: 'telefone'},
        {data: 'email'},
        {data: 'NIF'},
        { data: 'id'},
    ],
    "language": {
        "url": datatables_lang,
    },
    "responsive": true,
    "lengthChange": true,
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, todo]
    ],
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
        fornecedores.buttons().container().appendTo('div.toolbar');
        $('#fornecedores_length').appendTo('#fornecedores_filter');
    }
});

//Ficha existencias tabela
$('#existencias').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "language": {
        "url": datatables_lang,
    },
    "columnDefs": [{
        type: 'date-uk',
        targets: 5
    }]

});

//Operadores.index
var OpIndex = $("#operadores_index").DataTable({
    "dom": '<"toolbar">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/operadores/getOperadores/",
    "columns": [
        {data: 'nome'},
        {data: 'email'},
        {data: 'perfil'},
        {data: 'data_criacao'},
        {data: 'data_desativacao'},
        {data: 'id'},
    ],
    "language": {
        "url": datatables_lang,
    },
    "responsive": true,
    "lengthChange": true,
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, todo]
    ],
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
        OpIndex.buttons().container().appendTo('div.toolbar');
        $('#operadores_index_length').appendTo('#operadores_index_filter');
    }
});

var OpHis = $("#operadores_historico").DataTable({
    "dom": '<"toolbar">frtip l',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/operadores/getOperadoresHistorico/",
    "columns": [
        {data: 'operador'},
        {data: 'perfil'},
        {data: 'operacao'},
        {data: 'data'},
        {data: 'id'},
    ],
    "language": {
        "url": datatables_lang,
    },
    "order": [[3, 'desc']],
    "responsive": true,
    "lengthChange": true,
    "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, todo]
    ],
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
        OpHis.buttons().container().appendTo('div.toolbar');
        $('#operadores_historico_length').appendTo('#operadores_historico_filter');
    }
});

// Operadores.show
var operador_show = $('#operadores_show').DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "processing": true,
    "serverSide": true,
    "searching": false,
    "ajax": "/operadores/getOperadoresShow/",
    "columns": [
        {data: 'data'},
        {data: 'operacao'},
        {data: 'id'},
    ],
    "language": {
        "url": datatables_lang,
    },
    "order": [[0, 'desc']],
    "responsive": true,
    "lengthChange": true,
    "autoWidth": false,
});
operador_show.on('preXhr.dt', function (e, settings, data) {
    data.operador_id = $('#operador_id').val();
});

//date sorter
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
