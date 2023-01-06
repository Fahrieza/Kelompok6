<?php
require 'function.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

<!-- Awal Home -->

<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/foto1.png" class="d-block w-100 img-fluid" alt="Gambar1">
        </div>
        <div class="carousel-item">
          <img src="assets/foto2.png" class="d-block w-100 img-fluid" alt="Gambar2">
        </div>
        <div class="carousel-item">
          <img src="assets/foto3.png" class="d-block w-100 img-fluid" alt="Gambar3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

<!-- Akhir Home -->

<!-- Awal Kategori -->
<div class="container mt-3">
  <div class="judul-kategori" style="background-color: #fff; padding: 5px 10px;">
    <h5 class="text-center" style="margin-top: 5px;">KATEGORI</h5>
  </div>
      <div class="row text-center row-container mt-2">
        <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu kategori">
            <a href="kategorink.php"><img src="assets/logo/logonike.png" class="img-categori mt-3"></a>
            <p class="mt-2">Nike</p>
          </div>
        </div>

         <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu kategori">
            <a href="kategorinb.php"><img src="assets/logo/logonb.png" class="img-categori mt-3"></a>
            <p class="mt-2">New Balance</p>
          </div>
        </div>

         <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu kategori">
            <a href="kategorivans.php"><img src="assets/logo/logovans.png" class="img-categori mt-3"></a>
            <p class="mt-2">Vans</p>
          </div>
        </div>

         <div class="col-lg-2 col-md-3 col-sm-4 col-6">
          <div class="menu kategori">
            <a href="kategoricon.php"><img src="assets/logo/logoconv.png" class="img-categori mt-3"></a>
            <p class="mt-2">Converse</p>
          </div>
        </div>

  </div>
</div>

<!-- Akhir Kategori -->

<!-- Awal Produk -->
<div class="container mt-3">
  <div class="judul-produk" style="background-color: #fff; padding: 5px 10px;">
    <h5 class="text-center" style="margin-top: 5px;">PRODUK</h5>
  <div class="row">
    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/AJ1.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Air Jordan 1 High OG 'Dark Mocha</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 4.500.000</p>
            <a href="singleprodukaj1.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

     <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/nb5501.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">New Balance 550 V1</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 2.999.999</p>
            <a href="singleproduknb.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/con1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Converse Chuck 70 Canvas</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 1.100.000</p>
            <a href="singleprodukcon.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/vsk8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Vans SK8-HI Black and White</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 1.200.000</p>
            <a href="singleprodukvsk.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/nblz.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Nike Blazer Mid 77</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 1.300.000</p>
            <a href="singleproduknbl.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

    <div class="col-lg-2 col-md-2 col-sm-4 col-6 mt-3">
      <div class="card text-center">
          <img src="assets/produk/con2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h6 class="card-title">Pro Leather JoshVides</h6>
            <div class="icon-bintang" style="color: orange;">
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-solid fa-star"></i>
              <i class="fa-regular fa-star"></i>
            </div>
            <p class="card-text mt-2">Rp. 1.700.000</p>
            <a href="singleprodukcont.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

  </div>
</div>
<!-- Akhir Produk -->

<!-- Awal Footer -->

<footer class="btn-light p-3 mt-5">
  <div class="container">
    <div class="row mt-2">
      <div class="col md-6 text-md-start text-center pt-2 pb-2">
        <a href="#" style="text-decoration: none;">
          <img src="logo.png" style="width: 40px;">
          <strong class="sneaky">Sneaky Seek</strong>
        </a>
        <div class="col-md-6 text-md-end text-center">
          <a href="#" class="text-decoration-none">
            <img src="assets/socialmedia/logoig.png" class="ms-2" style="width: 30px;">
          </a>
          <a href="#" class="text-decoration-none">
            <img src="assets/socialmedia/logofb.png" class="ms-2" style="width: 30px;">
          </a>
          <a href="#" class="text-decoration-none">
            <img src="assets/socialmedia/logogmail.png" class="ms-2" style="width: 30px;">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Akhir Footer -->


    <br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>