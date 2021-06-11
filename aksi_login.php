<?php

session_start();
include 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email' and password='$password'");

$cek = mysqli_num_rows($query);

if ($cek == TRUE) {
    $_SESSION['email'] = $email;
    header("location:index.php");
} else {
    echo "<script>alert('Password Anda Salah !!');window.location='login.php'</script>";
}
