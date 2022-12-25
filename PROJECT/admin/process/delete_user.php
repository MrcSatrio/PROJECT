<?php 
include '../../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from user where username='$id'");
header("location:../index.php");
?>