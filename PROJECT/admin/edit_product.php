<?php include 'header.php'; 
include_once("../koneksi.php");
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from barang where id_brg='$id'");

?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<form method="post" action="process/edit_product.php">
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Kategori</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
while($user_data = mysqli_fetch_array($data)){   ?>      
    <input type="hidden" name="id" value="<?php echo $user_data['id_brg']; ?>">
    <td><?php echo $user_data['id_brg']; ?></td>
    <td><input type="text" name="nama_brg" value="<?php echo $user_data['nama_brg']; ?>"></td>
    <td><input type="text" name="deskripsi" value="<?php echo $user_data['deskripsi']; ?>"></td>
    <td><input type="number" name="harga_brg" value="<?php echo $user_data['harga_brg']; ?>"></td>
    <td><select name="kategori" required>
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
      <option value="anak">Anak</option>
    </select></td>
        <td> <input type="submit" value="Simpan" class='btn btn-sm btn-success' onClick='return confirm("Apakah Data Sudah Sesuai ?")'></input></td></tr>       
    <?php
      }
    ?>
    </table>
</form>
</body>
