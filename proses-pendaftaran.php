<?php

include 'config.php';

$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nomor_telp = $_POST['nomor_telp'];
$email = $_POST['email'];
$pertanyaan_lain = $_POST['pertanyaan_lain'];
$kode = $_POST['kode'];
$password = $_POST['password'];


mysqli_query($koneksi, "insert into konseling values('','$nama','$jenis_kelamin','$nomor_telp','$email','$pertanyaan_lain','$kode','$password')");

//header("location:login.php");
echo "<script>alert('Berhasil daftar');window.location='login.php';</script>";
