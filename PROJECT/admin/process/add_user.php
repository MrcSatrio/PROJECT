<?php 
include '../../koneksi.php';
$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$waktu = date('Y-m-d');
mysqli_query($koneksi,"insert into user values('$name','$email','$username','$password','$level','$waktu')");
header("location:../index.php");
?>