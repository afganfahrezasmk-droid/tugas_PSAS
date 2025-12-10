<?php
include '../koneksi.php';

$kendaraan_nomor = $_POST['kendaraan_nomor'];
$kendaraan_nama = $_POST['kendaraan_nama'];
$kendaraan_tipe = $_POST['kendaraan_tipe'];
$kendaraan_harga_per_hari = $_POST['kendaraan_harga_perhari'];

mysqli_query($koneksi,
"INSERT INTO kendaraan (kendaraan_nomor, kendaraan_nama, kendaraan_tipe, kendaraan_harga_perhari)
VALUES('$kendaraan_nomor','$kendaraan_nama','$kendaraan_tipe','$kendaraan_harga_perhari')");

header("location:kendaraan.php");
?>
