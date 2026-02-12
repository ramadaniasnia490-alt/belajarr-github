<?php

session_start();


session_unset();

session_destroy();


echo "
<script>
alert ('logout berhasil');
window.location.href = 'logout';
</script>";