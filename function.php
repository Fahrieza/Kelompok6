<?php

//koneksi
$koneksi =mysqli_connect('localhost','root','','web');

//daftar
if(isset($_POST['register'])){
    //jika regist diklik
    $username = $_POST['username'];
    $password = $_POST['password'];

    //enkripsi
    $epassword = password_hash($password, PASSWORD_DEFAULT);


    //insert db
    $insert = mysqli_query($koneksi,"INSERT INTO user (username,password) values ('$username','$epassword')");

    if($insert){
        //jika berhasil
        header('location:index.php');
    } else {
        //jika gagal
        echo '
        <script>
        alert("Registrasi gagal");
        widow.location.href="register.php";
        </script>
        ';
    }
}

//login
if(isset($_POST['login'])){
    //jika login diklik
    $username = $_POST['username'];
    $password = $_POST['password'];


    //insert db
    $cekdb = mysqli_query($koneksi,"SELECT * FROM user where username = '$username'");
    $hitung = mysqli_num_rows($cekdb);
    $pw = mysqli_fetch_array($cekdb);
    $passwordskrg = $pw['password'];

    if($hitung>0){
        //jika ada
        //verifikasi pass
        if(password_verify($password,$passwordskrg)){
            //jika pass benar
            header('location:homepage.php'); //ke home
        } else {
            //jika pass salah
            echo '
            <script>
                alert("login gagal");
                widow.location.href="register.php";
            </script>
            ';
        }
    }

    if($insert){
        //jika berhasil
        header('location:index.php');
    } else {
        //jika gagal
        echo '
        <script>
        alert("Registrasi gagal");
        widow.location.href="register.php";
        </script>
        ';
    }
}

?>