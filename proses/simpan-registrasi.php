<?php

include "../koneksi.php";
$tanggal=date("Y-m-d");
$a = password_hash($_POST['password'],PASSWORD_DEFAULT);
$b=$_POST['nama'];

// melakukan insert pada tabel user di databse
$query="insert into user
set
nama_lengkap='$b',
email='$_POST[email]',
password='$a',
kategori='siswa',
tgl_daftar='$tanggal'";
if (mysqli_query($db,$query)) {

    //mealakukan proses select pada tabel user
    $kueri="select * from user where nama_lengkap='$b'";
    $hasil=mysqli_query($db,$kueri);
    $data=mysqli_fetch_assoc($hasil);

    $query2="insert into pendaftaran
    set
    id_user='$data[id_user]',
    status='Pending'";

    //jika proses query berhasil maka bdata berhasil tersimpan
    if (mysqli_query($db,$query2)) {
        echo"<script>alert('Data tersimpan');</script>";
        echo"<meta http-equiv='refresh' content='0; url=../login.php'>";
    }else{
        echo"data tidak tersimpan";
    }

}else{
    echo"data tidak tersimpan";
}


?>