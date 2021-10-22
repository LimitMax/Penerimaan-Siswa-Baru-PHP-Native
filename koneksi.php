<?php

$server = 'localhost';
$user   = 'root';
$password = '';
$database = 'psb_dts';

$db = mysqli_connect($server, $user, $password, $database);

if(!$db) {
    die("Gagal Terhubung Ke Server: ". mysqli_connect_error());
}

?>