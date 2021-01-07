
// Tabelas com pesquisa e botoes de exportar (Clientes.index, Fornecedores.index)
var table = $("#complex").DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "language": {
        "url": "{{ __('lang.url-lang-dt') }}",
    },
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
        table.buttons().container().appendTo('div.toolbar');
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
        "url": "{{ __('lang.url-lang-dt') }}",
    },
    "columnDefs": [{
        type: 'date-uk',
        targets: 5
    }]

});

//Operadores.index
var OpIndex = $("#operadores_index").DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "language": {
        "url": "{{ __('lang.url-lang-dt') }}",
    },
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "columnDefs": [{
        type: 'date-uk',
        targets: 3
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
        OpIndex.buttons().container().appendTo('div.toolbar');
    }
});

var OpHis = $("#operadores_historico").DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "language": {
        "url": "{{ __('lang.url-lang-dt') }}",
    },
    "responsive": true,
    "lengthChange": false,
    "autoWidth": false,
    "columnDefs": [{
        type: 'date-uk',
        targets: 2
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
    "initComplete": function() {
        OpHis.buttons().container().appendTo('div.toolbar');
        
    }
});


// Operadores.show
$('#operadores_show').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "responsive": true,
    "language": {
        "url": "{{ __('lang.url-lang-dt') }}",
    },
    "columnDefs": [{
        type: 'date-uk',
        targets: 0
    }]
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


