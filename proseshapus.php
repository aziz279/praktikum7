<?php
include ( "koneksi.php" );

if ( isset ( $ _GET [ 'id' ])) {
    $ id = $ _GET [ 'id' ];

    //kueri hapus
    $ sql = "HAPUS DARI pegawai WHERE id_pgw = $id" ;
    $ query = mysqli_query ( $ sambungan , $ sql );

    //cek kueri
    jika ( $ permintaan ){
        header ( 'Lokasi: dataPegawai.php' );
    } lain {
        die ( "gagal menghapus..." );
    }
}

?>
