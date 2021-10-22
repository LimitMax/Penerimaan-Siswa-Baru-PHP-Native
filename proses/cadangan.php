<?php

// ambil koneksi
include "../koneksi.php";

// melakukan query untuk mengupdate data pendaftar
$query="update pendaftaran
set
status='Cadangan' where NISN='$_POST[idsis]'";

// melakukan perulangan, jika berhasil melakukan query maka berhasil diupdate
if ($mysqli=mysqli_query($db,$query)) {
    echo"<script>alert('Data sudah di update');</script>";
    echo"<meta http-equiv='refresh' content='0; url=../toadmin.php?p=datapendaftar'>";
}else{

    // jika gagal
    echo"data tidak tersimpan ";
}

?>