<?php
session_start();
session_destroy();

echo "<script>alert('Anda Yakin Keluar??');window.location='login.php'</script>";
