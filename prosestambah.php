<?php
include ( "koneksi.php" );

//proses untuk menambahkan data
if ( isset ( $ _POST [ 'daftar' ])) {
    $ id      = $ _POST [ 'idp' ];
    $ nama    = $ _POST [ 'nama' ];
    $ email   = $ _POST [ 'email' ];
    $ telp    = $ _POST [ 'telp' ];
    $ alamat = $ _POST [ 'alamat' ];
    $ idp     = $ _POST [ 'iddpt' ];
    $ idk     = $ _POST [ 'idkrj' ];

    //masukkan kueri
    $ sql = "INSERT INTO pegawai (id_pgw,nama_pgw,email_pgw,telp_pgw,alamat_pgw,id_kerja,id_departemen) VALUE ('$id','$nama','$email','$telp','$alamat',' $idk','$idp')" ;

    $ query = mysqli_query ( $ sambungan , $ sql );

    //cek kueri
    jika ( $ permintaan ) {
        header ( 'Lokasi: indek.php?status=sukses' );
    } lain {
        header ( 'Lokasi: indek.php?status=gagal' );
    }
} lain {
    die ( "Tombol Kirim tidak di klik" );
}

?>
