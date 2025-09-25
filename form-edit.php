<!DOCTYPE html>
<html>

<head>
    <title>CRUD PHP dan MySQLi </title>
</head>

<body>

    <h2>CRUD DATA konseling</h2>
    <br />
    <a href="index2.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA konseling</h3>

    <?php
    include 'config.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from konseling where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="proses-edit.php">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td><input type="text" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin']; ?>"></td>
                </tr>
                <tr>
                    <td>Nomor Telp</td>
                    <td><input type="text" name="nomor_telp" value="<?php echo $d['nomor_telp']; ?>"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
                </tr>
                <tr>
                    <td>Kode</td>
                    <td><input type="text" name="kode" value="<?php echo $d['kode']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>