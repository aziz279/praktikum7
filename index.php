<!DOCTYPE html >
< html >
< kepala >
    < judul > SIPEG </ judul >
</ kepala >
< tubuh >
    < tajuk >
        < h1 > INFORMASI SISTEM KEPEGAWAIAN SEDERGHANA </ h1 >
    </ tajuk >
    < h5 > Menu </ h5 >
    < navigasi >
        < ul >
            < li > < a  href =" formTambahan.php " > Daftar Baru </ a > </ li >
            < li > < a  href =" dataPegawai.php " > Data Pegawai </ a > </ li >
        </ ul >
    </ nav >
    <?php  if ( isset ( $ _GET [ 'status' ])): ?>
    < p >
        <?php
            if ( $ _GET [ 'status' ] == 'sukses' ){
                echo  "Pendaftaran Pegawai baru berhasil!" ;
            } lain {
                echo  "Pendaftaran gagal!" ;
            }
        ?>
    </ p >
<?php  endif ; ?>
</ tubuh >
</ html >
