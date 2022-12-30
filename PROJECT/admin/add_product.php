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
        <th scope="col">Foto Barang</th>
        <th scope="col">Harga Barang</th>
        <th scope="col">Kategori</th>
        <th scope="col">Deskripsi Barang</th>
        <th scope="col">Action</th>
    </tr>

    <td><input type="text" name="nama_brg" required></td>
    <td><input type="file" name="foto" required></td>
    <td><input type="number" name="harga_brg" required></td>
    <td><select name="kategori" required>
      <option value="pria">Pria</option>
      <option value="wanita">Wanita</option>
      <option value="anak">Anak</option>
    </select></td>
    <td><input type="text" name="deskripsi" required></td>
  </td>
    <td><input type="submit" value="SIMPAN" onClick='return confirm("Apakah Data Sudah Sesuai ?")'></td>
    </table>
</body>
