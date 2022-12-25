<?php include 'header.php'; 
include_once("../koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM transaksi where invoice='$id'");
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<table class="table table-bordered table-striped">
  <thead>
  <tr>
      <th scope="col">Invoice</th>
      <th scope="col">Username</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah Barang</th>
      <th scope="col">Jumlah Pembayaran</th>
      <th scope="col">Metode</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Nama Penerima</th>
      <th scope="col">Alamat Penerima</th>
      <th scope="col">Provinsi</th>
      <th scope="col">Kode Pos</th>
    </tr>
    <?php   
    while($user_data = mysqli_fetch_array($result)) {   
      $total = $user_data['total'];         
        echo "<td>".$user_data['invoice']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";   
        echo "<td>".$user_data['jumlah']."</td>";  
        echo "<td>"."Rp".number_format($total)."</td>";
        echo "<td>".$user_data['metode']."</td>";
        echo "<td>".$user_data['waktu']."</td>";
        echo "<td>".$user_data['nama']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['provinsi']."</td>";
        echo "<td>".$user_data['kodepos']."</td>";
        
    }
    ?>
    </table>
</body>
