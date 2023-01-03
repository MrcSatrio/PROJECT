<?php
include '../koneksi.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$waktu = date('Y-m-d');

// Check if data already exists
$sql = "SELECT * FROM user WHERE email='$email' OR username='$username'";
$result = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($result) > 0) {
    // data already exists
    header("location:../index.php?pesan=tersedia");
} else {
    // data does not exist
    mysqli_query($koneksi,"insert into user values('$name','$email','$username','$password','user','$waktu')");
    header("location:../index.php?pesan=daftar");
}

mysqli_close($koneksi);
?>
