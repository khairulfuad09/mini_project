$(function() {
    $('.tombolTambahData').on('click', function() {
        $('#judulModal').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });


    $('.tampilModalUbah').on('click', function() {
        $('#judulModal').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');

        const id = $(this).data('id');

        // console.log(id);

        $.ajax({
            url: 'http://localhost/phpMVC/public/mahasiswa/getubah',
            data: {'id' : id},
            method: 'post',
            dataType: 'json',
            contentType: "application/x-www-form-urlencoded",
            success: function(data) {
                $('#nama').val(data.nama);
            }
        });
    });

});