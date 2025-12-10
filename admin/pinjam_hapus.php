<?php
include '../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from pinjam where pinjam_id='$id'");

echo "<script>alert('data akan di hapus?'); window.location.href='pinjam.php'</script>";
?>