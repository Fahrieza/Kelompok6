<?php
  //koneksi database
  $server = "localhost";
  $user = "root";
  $pass = "";
  $database = "web";

  $koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
  
//Tombol simpan
  if(isset($_POST['bsimpan']))

  {
    $idpembeli  = $_POST["idpembeli"];
    $nama       = $_POST["nama"];
    $email      = $_POST["email"];
    $alamat     = $_POST["alamat"];
    $notelp     = $_POST["notelp"];
    $pesanan    = $_POST["pesanan"];

    $simpan = mysqli_query($koneksi, "UPDATE datap SET idpembeli='$idpembeli', nama='$nama', email='$email', alamat='$alamat', notelp='$notelp', pesanan='$pesanan' WHERE idpembeli='$idpembeli'")
    or die(mysqli_error($koneksi));
    if($simpan)
        {
            echo "<script>
            alert('data berhasil diedit!');
            document.location.href = 'function2.php';
          </script>";
        }
    else
    {
        echo "<script>
            alert('data gagal ditambah!');
            document.location.href = 'function2.php';
          </script>";
    }
  } 

  if (isset($_GET['idpembeli'])){
    $idpembeli = $_GET['idpembeli'];
} else {
    $idpembeli ='';
}
$ambildata = mysqli_query($koneksi, "SELECT * FROM datap WHERE idpembeli='$idpembeli'");
$data=mysqli_fetch_array($ambildata);

?>

  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/stylehome.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Awal Navbar -->
    <title>Sneaky Seek</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
     <a class="navbar-brand" href="homepage.php">
      <img src="logo.png" alt="" width="30" height="30" class="me-2">
      <strong>Sneaky Seek</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <form class="d-flex ms-auto my-4 my-lg-0">
      <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
      <button class="btn btn-light" type="submit">Cari</button>
    </form>
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="keranjang.php">Keranjang</a>
        <a class="nav-link" href="#">Notifikasi</a>
        <a class="nav-link" href="#">Bantuan</a>
        <a class="nav-link" href="register.php">Daftar</a>
        <a class="nav-link" href="index.php">Masuk</a>

      </div>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

    <div class="container">
      <h2 class="text-center">DATA PEMBELI</h2>

            <!--Awal Card Form-->
            <div class="card mt-3">
        <div class="card-header bg-primary text-white">Data Pembeli</div>
        <div class="card-body">
          <form method="post" action="">
            <div class="form-group">
              <label>Id Pembeli</label>
              <input type="text" name="idpembeli" value="<?php echo $data['idpembeli'] ?>" class="form-control" placeholder="" required />
            </div>

            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" placeholder="Input Nama anda disini" required />
            </div>

            <div class="form-group">
              <label>Email</label>
              <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control" placeholder="Input Email anda disini" required />
            </div>

            <div class="form-group">
              <label>Alamat</label>
              <input type="text" class="form-control" name="alamat" value="<?php echo $data['alamat'] ?>" required />
            </div>

            <div class="form-group">
              <label>No Telpon</label>
              <input type="text" name="notelp" value="<?php echo $data['notelp'] ?>" class="form-control" placeholder="Input No Telepon anda disini" required />
            </div>

            <div class="form-group">
              <label>Pesanan</label>
              <input type="text" name="pesanan" value="<?php echo $data['pesanan'] ?>" class="form-control" placeholder="Input Pesanan anda disini" required />
            </div>

            <button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger mt-3" name="breset">Reset</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

  </body>
</html>