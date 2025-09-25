<?php
$server = "localhost";
$user = "root";
$password = "";
$namadb = "cb_aja";

$koneksi = mysqli_connect($server, $user, $password, $namadb);

if (!$koneksi) {
    die("Gagal terhubung ke database : " . mysqli_connect_error());
}
