<?php

include 'config.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telp = $_POST['nomor_telp'];
$email = $_POST['email'];
$kode = $_POST['kode'];

mysqli_query($koneksi, "update konseling set nama='$nama', jenis_kelamin='$jenis_kelamin', nomor_telp='$nomor_telp', email='$email', kode='$kode' where id='$id'");

header("location:index2.php");
