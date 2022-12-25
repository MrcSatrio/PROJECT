<?php 
include '../../koneksi.php';
$nama_brg = $_POST['nama_brg'];
$harga_brg = $_POST['harga_brg'];
$kategori = $_POST['kategori'];

$rand = rand();
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

if($ukuran < 1044070){		
    $xx = $rand.'_'.$filename;
    move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/gambar/produk/'.$rand.'_'.$filename);
    mysqli_query($koneksi, "INSERT INTO barang VALUES(NULL,'$nama_brg','','$xx','$harga_brg','$kategori')");
    header("location:../product.php");
}
?>