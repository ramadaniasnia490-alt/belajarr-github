<?php
include 'koneksi.php';
$query = mysqli_query($connectDatabase, "SELECT * FROM makanan");
?>

<h3>Tambah Data</h3>
<form action="simpan.php" method="post">
    Nama :
    <input type="text" name="nama" required>

    Harga :
    <input type="number" name="harga" required>

    <button type="submit">Simpan</button>
</form>

<br><br>

<h3>Data Makanan</h3>
<table border="1" cellpadding="5">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>

    <?php 
    $i = 1;
    while($data = mysqli_fetch_assoc($query)) :
    ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><?= $data['nama']; ?></td>
        <td><?= $data['harga']; ?></td>
        <td>
            <a href="edit.php?id=<?= $data['id']; ?>">Edit</a> |
            <a href="delete.php?id=<?= $data['id']; ?>" 
               onclick="return confirm('Yakin hapus?')">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
</table>
