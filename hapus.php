<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "web";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

//query
$sql = "DELETE FROM datap WHERE idpembeli='" . $_GET["idpembeli"] . "'";
if (mysqli_query($koneksi, $sql)) {
    echo "Record deleted successfully";
    header('location: function2.php?');

} else {
    echo "Error deleting record: " . mysqli_error($koneksi);
}
mysqli_close($koneksi);
?>