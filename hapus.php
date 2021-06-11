<?php
include('koneksi.php');
$id = $_GET["id"];
$hapus = mysqli_query($koneksi, "DELETE FROM barang WHERE id=$id");
if ($hapus) {
    echo "<script>
alert('Hapus data sukses !');
document.location='admin.php';
</script>";
} else {
    echo "<script>
alert('Hapus data gagal !');
document.location='admin.php';
</script>";
}
