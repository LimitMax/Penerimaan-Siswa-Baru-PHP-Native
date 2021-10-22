<?php
session_start();
$_SESSION['sesi'] = NULL;

include "koneksi.php";
	if( isset($_POST['submit']))
	{
        $email = isset($_POST['email']) ? $_POST['email'] : "";
        $pass = isset($_POST['password']) ? $_POST['password'] : "";
        $query = mysqli_query($db,"select * from user where email ='$email'");

        $sesi = mysqli_num_rows($query);

        // melakukan perulangan jika sesi = 1 maka masuk sebagai admin
        if ($sesi == 1) {

            // ambil data dari tabel user
            $data_admin= mysqli_fetch_array($query);

            if (password_verify($pass,$data_admin['Password'])) {
                // jika kategori/sesi = 1 maka masuk sebagai admin, jika bukan maka masuk sebagai pendaftar
               if ($data_admin['kategori'] == 'admin') {
                $_SESSION['id_user'] = $data_admin['id_user'];
                $_SESSION['sesi'] = $data_admin['email'];
                echo"<script>alert('anda berhasil login');</script>";
                echo"<meta http-equiv='refresh' content='0; url=toadmin.php?$sesi'>";
               }else{
                $_SESSION['id_user'] = $data_admin['id_user'];
                $_SESSION['sesi'] = $data_admin['email'];
                echo"<script>alert('anda berhasil login');</script>";
                echo"<meta http-equiv='refresh' content='0; url=topendaftar.php?$sesi'>";
               }

            } else {
                echo"<script>alert('anda gagal login');</script>";
                echo"<meta http-equiv='refresh' content='0; url=login.php'>";
            }
        }else{
            echo"login gagal";
        }


        // # code...
    }else{
     include "login.php";
    }
?>