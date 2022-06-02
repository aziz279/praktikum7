<?php
include ( "koneksi.php" );
?>

<!DOCTYPE html >
< html  lang =" en " >
< kepala >
    < judul > SIAPEG </ judul >
</ kepala >
< tubuh >
    < tajuk >
        < h1 > INFORMASI SISTEM KEPEGAWAIAN SEDERHANA </ h1 >
        < h4 > Daftar Data Pegawai </ h4 >
    </ tajuk >
    < navigasi >
        < a  href =" formTambah.php " > Tambah Baru </ a >
    </ nav >
    < br >

    < batas tabel  = " 1px " >
        < kepala >
            < tr >
                < th > ID </ th >
                < th > Nama </ th >
                < th > Email </ th >
                < th > Telpon </ th >
                < th > Alamat </ th >
                < th > ID Departemen </ th >
                < th > ID Kerja </ th >
                < th > Opsi </ th >
            </ tr >
        </ kepala >
        < tubuh >
            <?php
            $ sql = "PILIH * DARI pegawai" ;
            $ query = mysqli_query ( $ sambungan , $ sql );

            while ( $ pegawai = mysqli_fetch_array ( $ query )) {
                echo  "<tr>" ;
                gema  "<td>" . $ pegawai [ 'id_pgw' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'nama_pgw' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'email_pgw' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'telp_pgw' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'alamat_pgw' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'id_departemen' ]. "</td>" ;
                gema  "<td>" . $ pegawai [ 'id_kerja' ]. "</td>" ;
                echo  "<td align = 'center'><a href='formEdit.php?id=" . $ pegawai [ 'id_pgw' ]. "'>Edit</a> | <a href='prosesHapus.php?id=" . $ pegawai [ 'id_pgw' ]. "'>Hapus</a></td>" ;
                echo  "</tr>" ;
            }
            ?>
        </ tbody >
    </ tabel >
    < p > Total : <?php  echo  mysqli_num_rows ( $ query ) ?> </ p >
</ tubuh >
</ html >
