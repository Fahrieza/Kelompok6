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
     <a class="navbar-brand" href="#">
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
        <a class="nav-link active" aria-current="page" href="#">Keranjang</a>
        <a class="nav-link" href="#">Notifikasi</a>
        <a class="nav-link" href="#">Bantuan</a>
        <a class="nav-link" href="register.php">Daftar</a>
        <a class="nav-link" href="index.php">Masuk</a>

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
          <li class="breadcrumb-item active" aria-current="page">Kategori</li>
        </ol>
      </nav>
      </div>
<!-- akhir bread -->

<!-- Kategori Vans -->
<div class="container mt-3">
  <div class="judul-produk" style="background-color: #fff; padding: 5px 10px;">
    <h5 class="text-center" style="margin-top: 5px;">Vans</h5>
  <div class="row">
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
            <a href="singleprodukaj1.php" class="btn btn-dark d-grid">Beli</a>
          </div>
        </div>
    </div>

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

<br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>