<?php
$localhost = "localhost";
$username  = "root";
$pass      = "";
$db        = "create";

$connectDatabase = mysqli_connect($localhost, $username, $pass, $db);

if (!$connectDatabase){
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
