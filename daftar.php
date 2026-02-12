<?php
require "index.php";

if (!isset($_POST["submit"])) {
    $nama = htmlspecialchars(string: $_POST["name"]);

    $query = mysqli_query(
        mysql: $connectDatabase,
        query: "INSERT INTO mahasiswa(name) VALUES ('$nama')"
    );

    if ($query === true) {
        echo "Data berhasil di simpan";
    } else {
        echo "Data gagal di simpan";
    }
}
?>

<form action="" method="post">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="name">
    <button type="submit">Simpan</button>
</form>