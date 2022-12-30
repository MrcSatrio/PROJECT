<?php 
// koneksi database
include '../../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$email = $_POST['email'];
$level = $_POST['level'];
$password = $_POST['password'];
 
// update data ke database
mysqli_query($koneksi,"update user set nama='$nama', username='$username', email='$email', level='$level', password='$password' where username='$id'");
header("location:../index.php");
 
?>