<?php
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($connectDatabase, "DELETE FROM makanan WHERE id='$id'");

header("Location: view.php");
?>
