<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


  <title>Konseling</title>
</head>
<style>
  body {
    background-image: url('poto/bg1.jpeg');
  }
</style>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Kee Konseling</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link active dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Konseling</a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
              <li><a class="dropdown-item" href="familyship2.php">Familyship</a></li>
              <li><a class="dropdown-item" href="relationship2.php">Relationship</a></li>
              <li><a class="dropdown-item" href="friendship2.php">Friendship</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="hubungikami.php">Hubungi Kami</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>

  <br>
  <br>
  <br>
  <h3 style="margin-top: 30px; margin-left: 30px">SILAHKAN PILIH PERNYATAAN YANG SESUAI!</h3>
  <p style="margin-left: 30px">K1. Cara mengatasi keluarga toxic</p>
  <p style="margin-left: 30px">K2. Cara menghindari stress</p>
  <p style="margin-left: 30px">K3. Cara menghadapi tekanan</p>

  <br>
  <hr size="10px" />
  <header style="text-align: center;">
    <h3>Pendaftaran Web Konseling</h3>
  </header>
  <br>
  <form method="post" action="proses-pendaftaran.php">
    <center>
      <table>
        <tr>
          <td>Nama</td>
          <td><input type="text" name="nama"></td>
        </tr>
        <tr>
          <td>Jenis Kelamin</td>
          <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
          <td>Nomor Telepon</td>
          <td><input type="number" name="nomor_telp"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email"></td>
        </tr>
        <tr>
          <td>Pertanyaan Lain</td>
          <td><input type="text" name="pertanyaan_lain"></td>
        </tr>
        <tr>
          <td>Kode</td>
          <td><input type="text" name="kode"></td>
        </tr>
        <tr>
          <td>password</td>
          <td><input type="text" name="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><button href="index2.php" class="btn btn-secondary">KEMBALI</button>
            <button type="submit" class="btn btn-success" name="Submit">SUBMIT</button>
          </td>
        </tr>
      </table>
    </center>
  </form>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>