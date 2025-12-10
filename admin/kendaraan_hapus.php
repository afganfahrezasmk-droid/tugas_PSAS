<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from kendaraan where kendaraan_nomor='$id'");

echo "<script>alert('data akan di hapus?'); window.location.href='kendaraan.php'</script>";
?>