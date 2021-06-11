<?php
include 'koneksi.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD_PHP</title>
</head>
<style>
    body {
        background-color: #f3f6f9;
    }
</style>

<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">MyWatch Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="admin.php">Halaman Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->
    <!-- End Header -->
    <div class="container">
        <h1 class="text-center mt-3">Tambah Data</h1>
        <!--Awal Card Form -->
        <div class="card">
            <div class="card-header bg-primary text-white">
                Form Tambah Data
            </div>
            <div class="card-body">
                <form action="aksi_tambah.php" method="POST">

                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan Deskripsi" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Harga</label>
                        <input type="text" name="harga" class="form-control" placeholder="Masukkan Harga" required>
                    </div>
                    <div class="form-group">
                        <label for="">Gambar</label>
                        <input type="text" name="gambar" class="form-control" placeholder="Masukkan Gambar" required>
                    </div>
                    <button type="submit" class="btn-success" name="tambah">Tambah Data</button>
                </form>
            </div>
        </div>
        <!--Akhir Card Form -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>