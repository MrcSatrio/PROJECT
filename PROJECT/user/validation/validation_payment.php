<?php 
include '../../koneksi.php';
$username = $_GET['username'];
$nama_barang = $_GET['nama_barang'];
$harga_barang = $_GET['harga_barang'];
$foto_barang  =  $_GET['foto_barang'];
$jumlah = $_GET['jumlah'];
$total = $_GET['total'];
$waktu = date('Y-m-d');
$metode = $_GET['metode'];
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$negara = $_GET['negara'];
$provinsi = $_GET['provinsi'];
$kodepos = $_GET['kodepos'];
$lenght = 10;

$randomString = bin2hex(random_bytes($lenght));

mysqli_query($koneksi,"INSERT into transaksi values('', '$randomString' ,'$username','$nama_barang','$harga_barang','$foto_barang','$jumlah','$total','$waktu','$metode','$nama','$alamat','$negara','$provinsi','$kodepos')");
header("location:../checkout_finish.php?id=$randomString");
?>