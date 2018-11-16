$(document).ready(function() {



    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

        }

    });
});

$('#name').focusout(function() {

    var val = $(this).val();

    $.ajax({
        dataType: 'json',
        type: "POST",
        url: "Search/user",
        data: {
            _token: $(this).data('token'),
            email: val
        },
        success: function(data1) {

            alert("flase" + data1);
        },
        error: function(data1) {
            console.log(JSON.stringify(data1));
            alert("An Error occurred " + JSON.stringify(data1));
        }
    });
});

$('#indexform').click(function() {

    alert("hi");
});