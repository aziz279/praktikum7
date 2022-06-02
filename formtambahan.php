<!DOCTYPE html>
< html >
< kepala >
    < judul >SIAPEG</ judul >
</ kepala >
< tubuh >
    < tajuk >
        < h1 >INFORMASI SISTEM KEPEGAWAIAN SEDERHANA</ h1 >
    </ tajuk >
    < form  action = " prosesTambah.php "  method  =  " post " >
        < kumpulan bidang >
            < tabel >
                < tr >
                < td >< label  for = " idp " >ID Pegawai </ label ></ td >
                < td >< input  type = " teks "  nama  =  " idp "  placeholder  =  " ID Kepegawain " ></ td >
                </ tr >
                < tr >
                < td >< label  for = " iddpt " >ID Departemen </ label ></ td >
                < td >< pilih  nama = " iddpt " >
                    < opsi >101</ opsi >
                    < opsi >102</ opsi >
                    < opsi >103</ opsi >
                    < opsi >104</ opsi >
                    < opsi >105</ opsi >
                    < opsi >106</ opsi >
                    < opsi >107</ opsi >
                </ pilih ></ td >
                </ tr >
                < tr >
                < td >< label  for = " idkrj " >ID Pekerjaan</ label ></ td >
                < td >< pilih  nama = " idkrj " >
                    < opsi >201</ opsi >
                    < opsi >202</ opsi >
                    < opsi >203</ opsi >
                    < opsi >204</ opsi >
                    < opsi >205</ opsi >
                    < opsi >206</ opsi >
                </ pilih ></ td >
                </ tr >
                < tr >
                < td >< label  for = " nama " >Nama </ label ></ td >
                < td >< input  type = " teks "  name  =  " nama "  placeholder  =  " Nama Lengkap " ></ td >
                </ tr >
                < tr >
                < td >< label  for = " email " >Email </ label ></ td >
                < td >< input  type = " teks "  nama  =  " email "  placeholder  =  " contoh123@gmail.com " ></ td >
                </ tr >
                < tr >
                < td >< label  for = " telp " >No Telepon </ label ></ td >
                < td >< input  type = " teks "  name  =  " telp "  placeholder  =  " Nomor telepon aktif " ></ td >
                </ tr >
                < tr >
                < td >< label  for = " alamat " >Alamat </ label ></ td >
                < td >< textarea  name = " alamat "  cols = " 21 "  rows = " 10 " ></ textarea ></ td >
                </ tr >
            </ tabel >
            < input  type = " submit "  value  =  " Daftar "  name  =  " daftar " >
        </ fieldset >
    </ bentuk >
</ tubuh >
</ html >
