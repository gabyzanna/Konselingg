<?php 
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum_login");
	}
	?>
<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi </title>
</head>
<style>
    body {
        background-image: url('poto/bg3.jpeg');
    }
</style>

<body>
    <center>
        <h2>DATA PASIEN KONSELING</h2>
    </center>
    <br />
    <a href="familyship2.php">+ TAMBAH KONSELING</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Telp</th>
            <th>Email</th>
            <th>Pertanyaan Lain</th>
            <th>Kode</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'config.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from konseling");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['jenis_kelamin']; ?></td>
                <td><?php echo $d['nomor_telp']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['pertanyaan_lain']; ?></td>
                <td><?php echo $d['kode']; ?></td>
                <td>
                    <a href="form-edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <br>
    <a href="logout.php">LOGOUT</a>
</body>

</html>