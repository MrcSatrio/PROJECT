<?php include 'header.php'; 
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<form method="post" action="process/add_product.php" enctype="multipart/form-data">
<table class="table table-bordered table-striped">
  <thead>
    <tr>
    <th scope="col">Nama Barang</th>
    <td><input type="text" name="nama_brg" required></td>
    </tr>
    <tr>
        <th scope="col">Foto Barang</th>
        <td><input type="file" name="foto" required></td>
    </tr>
    <tr>
        <th scope="col">Harga Barang</th>
        <td><input type="number" name="harga_brg" required></td>
    </tr>
    <tr>
        <th scope="col">Kategori</th>
        <td><select name="kategori" required>
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
      <option value="anak">Anak</option>
    </select></td>
    </tr>
    <tr>
        <th scope="col">Deskripsi Barang</th>
    <td><textarea name="deskripsi" id="" cols="70" rows="10" required></textarea></td>
    </tr>
    </table>
    <input type="submit" class="btn btn-primary"  value="SIMPAN" onClick='return confirm("Apakah Data Sudah Sesuai ?")'>
</body>
