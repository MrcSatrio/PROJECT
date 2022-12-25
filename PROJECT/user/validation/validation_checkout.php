<?php 
include '../koneksi.php';
$id = $_GET['id'];
$jumlah = $_POST['jumlah'];
$total = $jumlah;
header("location:../checkout.php?id=$id&total=$total");
?>