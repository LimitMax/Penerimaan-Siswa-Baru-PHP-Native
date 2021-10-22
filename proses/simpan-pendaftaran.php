<?php

include "../koneksi.php";

// Baca lokasi file sementar dan nama file dari form
$filename = $_FILES["foto"]["name"];
$tempname = $_FILES["foto"]["tmp_name"];

// Tentukan folder untuk menyimpan file
$folder = "../image/".$filename;

//melakukan query update pada tabel pendaftar
$query="update pendaftaran
set
NISN='$_POST[nisn]',
nama_lengkap='$_POST[namasiswa]',
tempat_lahir='$_POST[tempatlahir]',
tgl_lahir='$_POST[tgllahir]',
alamat='$_POST[alamatsiswa]',
jenis_kelamin='$_POST[jeniskelamin]',
agama='$_POST[agama]',
no_hp='$_POST[notelpon]',
asal_sekolah='$_POST[asalsekolah]',
foto='$filename' where id_user='$_POST[iduser]'";
$mysqli=mysqli_query($db,$query);

// Apabila proses file berhasil diupload
if (move_uploaded_file($tempname,$folder)) {

    //melakukan proses select pada tabel pendaftaran
    $querycek="select * from pendaftaran where NISN='$_POST[nisn]'";
    $mysqlicek=mysqli_query($db,$querycek);
    $data=mysqli_fetch_assoc($mysqlicek);

    //Melakukan insert data pada tabel nilai
    $querynilai="insert into nilai
    set
    id_pendaftar='$data[id_pendaftar]',
    b_indo='$_POST[bindo]',
    b_inggris='$_POST[bing]',
    mtk='$_POST[matematika]',
    pilihan='$_POST[mapil]'";

    //jika proses insert nilai berhasil maka data berhasil tersimpan
    if ($mysqlinilai=mysqli_query($db,$querynilai)) {
        echo"<script>alert('Data tersimpan');</script>";
        echo"<meta http-equiv='refresh' content='0; url=../topendaftar.php?p=beranda-pendaftar'>";
    }else{
        echo"<script>alert('Data Tidak Tersimpan');</script>";
        echo"<meta http-equiv='refresh' content='0; url=../topendaftar.php?p=beranda-pendaftar'>";
    }

}else{
    echo"<script>alert('Data Tidak Tersimpan');</script>";
    echo"<meta http-equiv='refresh' content='0; url=../topendaftar.php?p=beranda-pendaftar'>";
}

?>