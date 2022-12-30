<?php 
include '../../koneksi.php';

$nama_brg = $_POST['nama_brg'];
$harga_brg = $_POST['harga_brg'];
$kategori = $_POST['kategori'];
$deskripsi = $_POST['deskripsi'];

// Generate a random number to use as a prefix for the uploaded file
$rand = rand();
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);

// Check if the file size is less than 1MB
if ($ukuran < 1044070) {
    // Use the random number as a prefix for the uploaded file
    $new_filename = $rand . '_' . $filename;
    // Move the uploaded file to the specified directory
    move_uploaded_file($_FILES['foto']['tmp_name'], '../../assets/gambar/produk/' . $new_filename);
    // Insert the data into the database
    mysqli_query($koneksi, "INSERT INTO barang VALUES(NULL,'$nama_brg','$deskripsi','$new_filename','$harga_brg','$kategori')");
    // Redirect to the product page
    header("location:../product.php");
}
?>
