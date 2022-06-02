<!DOCTYPE html >
< html  lang =" en " >
< kepala >
< meta  charset =" UTF-8 " >
< meta  http-equiv =" X-UA-Compatible " content =" IE=edge " >

< meta  name =" viewport " content =" width=device-width, initial-
skala=1.0 " >

< title > Program Buku Tamu </ title >
</ kepala >
< tubuh >
< h1 > Membuat Database Buku Tamu </ h1 >
<?php
$ host = "host lokal" ;
$ namapengguna = "akar" ;
$ pw = "" ;
$ dbname = "my_db" ;
//membuat koneksi db
$ conn = mysqli_connect ( $ host , $ username , $ pw , $ dbname );
//cek koneksi db
jika (! $ sambungan ) {
die ( "Koneksi Gagal : " .mysqli_connect_error ( ));
}

$ squery = "BUAT TABEL `my_db`.`bukutamu` ( `ID_BT` INT(10)
NOT NULL , `NAMA` VARCHAR(200) NOT NULL , `EMAIL` VARCHAR(50) NOT
NULL, `ISI` TEXT NOT NULL) ENGINE = InnoDB;" ;
if ( mysqli_query ( $ conn , $ squery )) {
echo  "Tabel Baru 'bukutamu' berhasil dibuat" ;
} lain {
gema  "Kesalahan: " . $ permintaan . "<br>" . mysqli_error ( $ sambung );
}
mysqli_close ( $ sambung );
?>

</ tubuh >
</ html >
