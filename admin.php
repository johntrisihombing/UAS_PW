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
            <a class="navbar-brand" href="index.php">MyWatch Store</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a href="tambah.php" class="nav-link btn btn-primary">Tambah Barang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Header -->

    <div class="header">
        <h1 class="text-center mt-3">Form Input Barang</h1>
        <h2 class="text-center"></h2>
    </div>

    <!--Awal Card Tabel -->
    <div class="container">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Daftar Barang
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>No</th>
                        <!-- Sembunyikan Id -->
                        <!-- <th>Id</th> -->
                        <th>Nama</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $no = 1;
                    $tampil = mysqli_query($koneksi, "SELECT * from barang order by id desc");
                    while ($data = mysqli_fetch_array($tampil)) :
                    ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <!-- Sembunyikan Id,id tidak perlu ditampilkan-->
                            <!-- <td><?= $data['id'] ?></td> -->
                            <!--  -->
                            <td><?= $data['nama'] ?></td>
                            <td><?= $data['deskripsi'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td><img src="<?php echo $data['gambar']; ?>" width="80"></td>
                            <td>
                                <a href="edit.php?id=<?php echo $data['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="hapus.php?id=<?php echo $data['id'] ?>" onclick="return confirm('Apakah yakin ingin menghapus data ini?')" class=" btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>