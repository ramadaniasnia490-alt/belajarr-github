<?php
include 'koneksi.php';

if(isset($_POST['update'])){
    $id    = $_POST['id'];
    $nama  = $_POST['nama'];
    $harga = $_POST['harga'];

    mysqli_query($connectDatabase, 
        "UPDATE makanan SET nama='$nama', harga='$harga' WHERE id='$id'"
    );

    header("Location: view.php");
}
?>
