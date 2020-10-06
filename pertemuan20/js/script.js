$(document).ready(function() {
    // hilangkan tombol cari
    $('#tombol-cari').hide();

    // event ketika keyword ditulis
    $('#keyword').on('keyup', function() {
        // munculakn icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/cars.php?keyword=' + $('#keyword').val());

        // $.get()
        $.get('ajax/cars.php?keyword=' + $('#keyword').val(), function(data) {

            $('#container').html(data);
            $('.loader').hide();

        });
    });

})
