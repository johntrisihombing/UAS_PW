<?php
session_start();
include 'koneksi.php';
if (!isset($_SESSION["email"])) {
    header("location:login.php");
}
if (isset($_SESSION["email"])) {
    $email = $_SESSION["email"];
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css1/light.css">
    <link rel="stylesheet" href="css1/style.css">
    <link rel="icon" type="image/png" href="images/usu.png">
    <title>UTS PW 3</title>
</head>

<body>
    <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <div class="container">
        <div class="row">
            <div class="column" style="margin-top: 10%">
                <img src="images/avatar.png" srcset="images/usu.png" alt="USU Logo">
                <h1>UTS Dan UAS PW</h1>
                <h2>Pusing belajar? Yuk Main Game dan Quiz Dulu :)</h2>
                <p>There is even a ☀️ <a href="index.html">light</a> and 🌑 <a href="dark.php">dark</a> theme.</p>


                <a class="btn btn-dark" href="quiz/index.html">Quiz Pemrograman</a>
                <br>
                <a class="btn btn-dark" href="suwitjawa/index.html">Game Suwit</a>
                <br>
                <a class="btn btn-dark" href="admin.php">Tugas CRUD</a>
                <br>
                <a class="btn btn-dark" href="aksi_logout.php">Keluar</a>
                <br>
                <br>
                <p>Made With &#10084; By: John Sihombing</a>.</p>

            </div>
        </div>
    </div>

    <!-- End Document-->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>

</html>