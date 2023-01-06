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
    <link rel="stylesheet" type="text/css" href="css/keranjang.css">
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
          <li class="breadcrumb-item active" aria-current="page">Keranjang</li>
        </ol>
      </nav>
      </div>
<!-- akhir bread -->

<!-- Awal keranjanhg -->
      <div class ="container">
        <div class ="row row-produk">
         <div class ="col">
         <table class="table">
            <thead>
                <tr>

                <th scope="col">Gambar</th>
                <th scope="col">Produk</th>
                <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td><img src ="assets/produk/AJ1.png" class="img-keranjang"></td>
                <td>Nike Air Jordan 1 High OG Dark Mocha</td>
                <td>Rp. 4.500.000</td>
                <td>
                </td>
                </tr>
                <tr>
                <th scope="row"></th>
                <td> 
                 <div class = "btn-chekout">
                 <a href="function2.php" class="btn btn-dark d-grid">Chekout</a>
                 </div>
                    </td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
            </table>
         </div>
        </div>
      </div>


<!-- akhir keranjang -->

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