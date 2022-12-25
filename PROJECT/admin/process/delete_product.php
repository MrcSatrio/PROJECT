<?php 
include '../../koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi,"delete from barang where id_brg='$id'");
header("location:../product.php");
?>