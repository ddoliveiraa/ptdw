
var locale = $('#navbarDropdown').text().trim();
var datatables_lang;
var Ttodos;
var Tquimico;
var TnaoQuimico;
if (locale == "PT") {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/Portuguese.json';
    Ttodos = "Todos";
    Tquimico = "Químicos";
    TnaoQuimico = "Não Químicos";
}
else {
    datatables_lang = '//cdn.datatables.net/plug-ins/1.10.22/i18n/English.json';
    Ttodos = "All";
    Tquimico = "Chemicals";
    TnaoQuimico = "Non-Chemicals";
}


var produtos = $("#tabelaprodutos").DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "processing": true,
    "serverSide": true,
    "ajax": "/produtos/getProdutos/",
    "columns": [
        { data: 'designacao' },
        { data: 'formula' },
        { data: 'CAS' },
        { data: 'Quimico' },
        { data: 'stock' },
        { data: 'stock_min' },
        { data: 'id' },
    ],
    "language": {
        "url": datatables_lang,
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
        produtos.buttons().container().appendTo('div.toolbar');
        var selects = $("<select></select>").attr('id', 'tipo');
        selects.addClass('form-control select col-md-1');
        $('div.toolbar').append(selects);
        $('#tipo').append(new Option(Ttodos, "Todos"));
        $('#tipo').append(new Option(Tquimico, "Sim"));
        $('#tipo').append(new Option(TnaoQuimico, "Não"));

        $.fn.dataTable.ext.search.push(
            function (settings, searchData, index, rowData, counter) {
                var tipo = $('#tipo option:selected').val();
                var tipos = searchData[3]; // using the data from the 4th column

                if (tipo == tipos) {
                    return tipos;
                } else if (tipo == "Todos") {
                    return true;
                }
                return false;
            }
        );
        $('#tipo').change(function () {
            produtos.draw();
        });
    }
});

// Tabelas com pesquisa e botoes de exportar (Clientes.index, Fornecedores.index)
var table = $("#complex").DataTable({
    "dom": '<"toolbar">frtip',
    "info": true,
    "language": {
        "url": datatables_lang,
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
        "url": datatables_lang,
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
        "url": datatables_lang,
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
        "url": datatables_lang,
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
    "initComplete": function () {
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
        "url": datatables_lang,
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


