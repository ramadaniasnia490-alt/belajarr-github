<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "post"){
    if ($_post["username"] === "admin" && $_post === ["password"]){
        $_SESSION["islogged"];

        header ("location: dashboard.php");
    }
    else{
        echo 
        "<script>
        alert{'username atau password salah'}
        </script>";
    }
}
?>

<form action="" mathod="post"> 
 <label for="username">username</label>
 <input type="text" id = "username" name = "username">
 <label for="password">password</label>
 <input type="text" id = "password" name="password">
 <button type="submit">submit</button>
</form>