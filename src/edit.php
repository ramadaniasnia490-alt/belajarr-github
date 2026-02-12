<?php
include 'koneksi.php';

$id = $_GET['id'];
$query = mysqli_query($connectDatabase, "SELECT * FROM makanan WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

<h3>Edit Data</h3>

<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $data['id']; ?>">

    Nama :
    <input type="text" name="nama" value="<?= $data['nama']; ?>" required>

    Harga :
    <input type="number" name="harga" value="<?= $data['harga']; ?>" required>

    <button type="submit" name="update">Update</button>
</form>

<br>
<a href="view.php">Kembali</a>
