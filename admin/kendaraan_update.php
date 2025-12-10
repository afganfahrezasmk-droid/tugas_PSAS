<?php
include '../koneksi.php';

$kendaraan_nomor = $_POST['kendaraan_nomor'];
$kendaraan_nama = $_POST['kendaraan_nama'];
$kendaraan_tipe = $_POST['kendaraan_tipe'];
$kendaraan_harga_perhari = $_POST['kendaraan_harga_perhari'];

mysqli_query($koneksi,"update kendaraan set kendaraan_nama='$kendaraan_nama', kendaraan_tipe='$kendaraan_tipe', kendaraan_harga_perhari='$kendaraan_harga_perhari' where kendaraan_nomor='$kendaraan_nomor'");

echo "<script>alert('Data Telah Diubah'); window.location.href='kendaraan.php'</script>";
?>