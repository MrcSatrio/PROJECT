<?php 
include '../koneksi.php';
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$waktu = date('Y-m-d');
mysqli_query($koneksi,"insert into user values('$name','$email','$username','$password','user','$waktu')");
header("location:../index.php?pesan=daftar");
?>