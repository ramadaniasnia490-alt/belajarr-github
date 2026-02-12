<?php
 session_start();

 if ($_SESSION != "login") {
     header ("Location: login.php");
 }

 echo "berhasil login";

 ?>

 <a href="logout.php">logout</a>