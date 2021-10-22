<?php

include '../koneksi.php';

$query="delete from pendaftaran where id_user='$_GET[id]' ";
if (mysqli_query($db,$query)) {
    header("location:../toadmin.php?p=datapendaftar");

}

?>