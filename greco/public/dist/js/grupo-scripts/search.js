var split = window.location.href.split("/");
var isServer = "";
for (x of split) {
    if (x == "~ptdw-2020-gr3") {
        isServer = "/~ptdw-2020-gr3";
    }
}

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
        url:  isServer + '/search',
        data: {
            'search': $s,
            'filtro': $f
        },
        success: function (data) {
            $('#searchResults').html(data);
        }
    });
}

if ($("#search").val() != '') {
    search();
}

$("#filtro").on('change', function () {
    search();
});


$('#search').on('keyup', function () {
    search();
})
