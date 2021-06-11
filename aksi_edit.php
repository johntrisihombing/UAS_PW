<?php
if (isset($_POST['ubah'])) {
    include('koneksi.php');
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];
    $harga = $_POST['harga'];
    $gambar = $_POST['gambar'];


    //query update data
    $query = "UPDATE barang SET
      id='$id',
      nama='$nama',
      deskripsi='$deskripsi',
      harga='$harga',
      gambar='$gambar'
      WHERE id=$id
      ";

    $ubah = mysqli_query($koneksi, $query);

    if ($ubah) {
        echo "<script>
    alert('Ubah data sukses !');
    document.location='admin.php';
    </script>";
    } else {
        echo "<script>
    alert('Ubah data gagal !');
    document.location='admin.php';
    </script>";
    }
}
