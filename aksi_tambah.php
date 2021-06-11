<?php
if (isset($_POST['tambah'])) {
    include_once 'koneksi.php';
    $input = mysqli_query($koneksi, "INSERT INTO barang (nama,deskripsi,harga,gambar)
    VALUES 
   (
   '$_POST[nama]',
   '$_POST[deskripsi]',
   '$_POST[harga]',
   '$_POST[gambar]')");
    if ($input) {
        echo "<script>
    alert('Simpan data sukses !');
    document.location='admin.php';
    </script>";
    } else {
        echo "<script>
    alert('Simpan data gagal !');
    document.location='admin.php';
    </script>";
    }
}
