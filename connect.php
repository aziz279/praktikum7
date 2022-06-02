<?php
$ host    = "host lokal" ;
$ pengguna    = "akar" ;
$ pas    = "" ;
$ dbnama = "mydb" ;

$ sambungan = mysqli_connect ( $ host , $ user , $ pass , $ dbname );

jika (! $ sambungan ) {
    die ( "Gagal Terhubung dengan database " . $ dbname .mysqli_connect_error ( ));
} lain {
    echo  "Basis Data : " . $ dbnama . " : Berhasil Terhubung" ;
}
?>
