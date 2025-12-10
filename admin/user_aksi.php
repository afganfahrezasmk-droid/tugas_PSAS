<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$user_nama = $_POST['user_nama'];
$user_alamat = $_POST['user_alamat'];
$user_status= $_POST['user_status'];

mysqli_query($koneksi,"insert into user values('','$username','$password','$user_nama','$user_alamat','$user_status')");
header("location:user.php");
?>