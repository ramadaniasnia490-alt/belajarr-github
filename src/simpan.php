<?php
include 'koneksi.php';

$nama  = $_POST['nama'];
$harga = $_POST['harga'];

mysqli_query($connectDatabase, 
    "INSERT INTO makanan (nama, harga) VALUES ('$nama', '$harga')"
);

header("Location: view.php");
?>
