<?php
include '../koneksi.php';
$user_id = $_POST['user_id'];
$kendaraan_nomor = $_POST['kendaraan_nomor'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$pinjam_status= $_POST['pinjam_status'];

mysqli_query($koneksi,"INSERT INTO pinjam (user_id, kendaraan_nomor, tgl_pinjam, tgl_kembali, pinjam_status) VALUES ('','$user_id','$kendaraan_nomor','$tgl_pinjam','$tgl_kembali','$pinjam_status')");
header("location:pinjam.php");
?>