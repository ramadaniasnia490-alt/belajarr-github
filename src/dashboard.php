<?php
 session_start();

 if ($_SESSION != "login") {
     header ("Location: login.php");
 }

 echo "berhasil login";

 ?>

 <h1>halaman dashboard</h1>

 <a href="logout.php">logout</a>