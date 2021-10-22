<?php

include"koneksi.php";
session_start();
if (!isset($_SESSION['sesi'])) {
  header("location:login.php");
}

?>

<!DOCTYPE html>

<head>
    <title>Bukti Pendaftaran</title>
    <meta charset="utf-8">
    <style>
    #judul {
        text-align: center;
    }

    #halaman {
        width: auto;
        height: auto;
        position: absolute;
        border: 1px solid;
        padding-top: 30px;
        padding-left: 100px;
        padding-right: 100px;
        padding-bottom: 80px;
    }
    </style>

</head>

<body>

    <div id=halaman>
        <h3 id=judul>BUKTI PENDAFTARAN SISWA BARU</h3>
        <h3 style="text-align: center;">PMB SEKOLAH MENANGAH PERTAMA 2021</h3>

        <p>Panitia Pelaksana PSB 2021 Menyatakan, Bahwa Peserta Berikut :</p>
        <center>
            <table>
                <?php
                $query="select * from pendaftaran where id_user='$_SESSION[id_user]'";
                $mysqli=mysqli_query($db,$query);
                $data=mysqli_fetch_assoc($mysqli);
            ?>
                <tr>
                    <td style="width: 30%;">NISN </td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?= $data['NISN']?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?= $data['nama_lengkap']?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tanggal Lahir</td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?= $data['tempat_lahir']?>, <?= $data['tgl_lahir']?></td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">Alamat</td>
                    <td style="width: 5%; vertical-align: top;">:</td>
                    <td style="width: 65%;"><?= $data['alamat']?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">No Telepon </td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?= $data['no_hp']?></td>
                </tr>
                <tr>
                    <td style="width: 30%;">Status </td>
                    <td style="width: 5%;">:</td>
                    <td style="width: 65%;"><?= $data['status']?></td>
                </tr>
                <?php
            ?>
            </table>
        </center>

        <p>Telah Mendaftar PSB Online 2021. Harap Simpan Bukti Ini Dengan Baik.</p> <br>

        <div style="width: 50%; float: right;">Majalengka,<?= date("d-m-Y"); ?></div><br>
        <div style="width: 50%; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
        <div style="width: 50%; float: right;">Panitia </div>

    </div>
</body>
<script>
window.print()
</script>

</html>