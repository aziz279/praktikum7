<?php
include ( "koneksi.php" );

//proses untuk update data
if ( isset ( $ _POST [ 'update' ])) {
    $ id      = $ _POST [ 'idp' ];
    $ nama    = $ _POST [ 'nama' ];
    $ email   = $ _POST [ 'email' ];
    $ telp    = $ _POST [ 'telp' ];
    $ alamat = $ _POST [ 'alamat' ];
    $ idp     = $ _POST [ 'iddpt' ];
    $ idk     = $ _POST [ 'idkrj' ];

    //masukkan kueri
    $ sql = "UPDATE pegawai SET nama_pgw='$nama',email_pgw='$email',telp_pgw='$telp',alamat_pgw='$alamat' WHERE id_pgw=$id" ;

    $ query = mysqli_query ( $ sambungan , $ sql );

    //cek kueri
    jika ( $ permintaan ) {
        header ( 'Lokasi: dataPegawai.php' );
    } lain {
       meninggal ( "Data Gagal Turut" );
    }
} lain {
    die ( "Tombol Simpan tidak di klik" );
}

?>
