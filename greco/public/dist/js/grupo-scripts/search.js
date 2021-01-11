$.ajaxSetup({
    headers: {
        'csrftoken': '{{ csrf_token() }}'
    }
});

function search() {
    $s = $('#search').val();
    $f = $("#filtro").val();
    $.ajax({
        type: 'get',
        url: '/search',
        data: {
            'search': $s,
            'filtro': $f
        },
        success: function (data) {
            $('#searchResults').html(data);
        }
    });
}

if($("#search").val()!=''){
    search();
}

$("#filtro").on('change', function () {
    search();
});


$('#search').on('keyup', function () {
    search();
})
