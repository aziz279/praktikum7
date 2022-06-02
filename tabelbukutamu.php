<?php
$ namaserver = "localhost" ;
$ namapengguna = "akar" ;
$ sandi = "" ;
$ dbname = "my_db" ;

// Buat Koneksi
$ conn = mysqli_connect ( $ servername , $ username , $ password , $ dbname );

// Periksa Koneksi
jika (! $ sambungan ) {
    die ( "Koneksi gagal:" .mysqli_connect_error ( ));
}

$ sql = "BUAT TABEL buku_tamu (
    id_bt INT(10) KUNCI UTAMA,
    nama VARCHAR(40) BUKAN NULL,
    email VARCHAR(30) BUKAN NULL,
    isi teks()
    )" ;

if ( mysqli_query ( $ conn , $ sql )) {
    echo  "Tabel Berhasil Dibuat" ;
} lain {
    echo  "Gagal Membuat Tabel" . mysqli_error ( $ sambung );
}

mysqli_close ( $ sambung );
?> 
