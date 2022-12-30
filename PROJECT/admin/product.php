<?php include 'header.php'; 
include_once("../koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM barang ");
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<a href="add_product.php">Tambah Produk</a><br/><br/>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
    <th scope="col">ID</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Deskripsi Barang</th>
      <th scope="col">Harga Barang</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
    while($user_data = mysqli_fetch_array($result)) { 
        $harga = $user_data['harga_brg'];  ?>      
       <?php echo "<td>".$user_data['id_brg']."</td>"; ?> 
       <?php echo "<td>".$user_data['nama_brg']."</td>"; ?> 
       <?php echo "<td>".$user_data['deskripsi']."</td>";    ?> 
       <?php echo "<td>"."Rp.".number_format($harga)."</td>"; ?> 
        <td><a href="edit_product.php?id=<?php echo $user_data['id_brg'];?>" class='btn btn-sm btn-warning'>Edit</a>
                  <a href="process/delete_product.php?id=<?php echo$user_data['id_brg'];?>" class='btn btn-sm btn-danger' onClick='return confirm("Yakin mau di Hapus?")'>Delete</a></td></tr>      
    <?php
      }
    ?>
    </table>
</body>
