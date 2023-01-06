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
    <link rel="stylesheet" type="text/css" href="css/styleproduk.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.min.css">

    <!-- Awal Navbar -->
    <title>Sneaky Seek</title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
     <a class="navbar-brand" href="#">
      <img src="logo.png" alt="" width="25" height="30" class="me-2">
      <strong>Sneaky Seek</strong>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <form class="d-flex ms-auto my-4 my-lg-0">
      <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search">
      <button class="btn btn-light" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
    </form>
      <div class="navbar-nav ms-auto">
        <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
        <a class="nav-link" href="#">Notifikasi</a>
        <a class="nav-link" href="#">Bantuan</a>
        <a class="nav-link" href="register.html">Daftar</a>
        <a class="nav-link" href="index.html">Masuk</a>

      </div>
    </div>
  </div>
</nav>
<!-- Akhir Navbar -->

<!-- awal bread -->

      <div class="container">
        <nav aria-label="breadcrumb" style="background-color: #fff;" class="mt-3">
        <ol class="breadcrumb p-3">
          <li class="breadcrumb-item"><a href="homepage.php" class="text-decoration-none">Home</a></li>
          <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Kategori</a></li>
          <li class="breadcrumb-item active" aria-current="page">Produk</li>
        </ol>
      </nav>
      </div>
<!-- akhir bread -->

<!-- single produk -->
      <div class="container">
        <div class="row row-produk">
          <div class="col-lg-5">
            <figure class="figure">
              <img src="assets/produk/AJ1.png" class="figure-img img-fluid " style="border-radius: 5px; width: 450px;">
              <figcaption class="figure-caption d-flex justify-content-evenly">
                <a href="#">
                  <img src="assets/produk/AJ1.png" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;">
                </a>
                <a href="#">
                  <img src="assets/produk/AJ2.png" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;">
                </a>
                <a href="#">
                  <img src="assets/produk/AJ3.png" class="figure-img img-fluid " style="border-radius: 5px; width: 70px;">
                </a>
              </figcaption>
            </figure>
          </div>
          <div class="col-lg-7">
            <h4>Nike Air Jordan 1 Dark Mocha</h4>
            <div class="garis-nama"></div>
            <h3 class="text-muted mb-3">Rp. 4.500.000</h3>

            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">8</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">8,5</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">9</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">9,5</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">10</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">10,5</button>
            <button type="button" class="btn btn-dark btn-sm mt-3 me-3 btn-size">11</button>
            <br><br><br><br>

            <button type="button" class="btn btn-dark btn-sm"><i class="fas fa-minus"></i></button>
            <span class="mt-3 mx-2">1</span>
            <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-plus text-white"></i></button>
            <br><br>
            <span class="mt-3">Tersisa 10 Buah</span>


            <div class="btn-produk mt-5">
              <a href="keranjang.php" class="btn btn-dark text-white btn-lg me-2 btn-custom" style="font-size: 14px;"> <i class="fas fa-shopping-cart fs-6 me-2"></i> Masukan Keranjang</a>
              <a href="co.php" class="btn btn-warning text-white btn-lg btn-custom" style="font-size: 14px;">Beli Sekarang</a>
            </div>
          </div>
        </div>
      </div>
<!-- akhir single -->

<!-- Awal Footer -->

<footer class="btn-light p-3 mt-5">
  <div class="container">
    <div class="row">
      <div class="col md-6">
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


    <br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>