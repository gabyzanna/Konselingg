<?php

include 'config.php';

$id = $_GET['id'];


mysqli_query($koneksi, "delete from konseling where id='$id'");

header("location:index2.php");
