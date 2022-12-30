<?php 
// koneksi database
include '../../koneksi.php';
$id = $_POST['id'];
$nama_brg = $_POST['nama_brg'];
$deskripsi = $_POST['deskripsi'];
$harga_brg = $_POST['harga_brg'];
$kategori = $_POST['kategori'];
 
// update data ke database
mysqli_query($koneksi,"update barang set nama_brg='$nama_brg', deskripsi='$deskripsi', harga_brg='$harga_brg', kategori='$kategori' where id_brg='$id'");
header("location:../product.php");
 
?>