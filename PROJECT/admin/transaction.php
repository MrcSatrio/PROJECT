<?php include 'header.php'; 
include_once("../koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM transaksi ");
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
      <th scope="col">Jumlah Pembayaran</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
    while($user_data = mysqli_fetch_array($result)) {   
      $total = $user_data['total'];         
        echo "<td>".$user_data['invoice']."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";   
        echo "<td>"."Rp".number_format($total)."</td>";
        echo "<td>".$user_data['waktu']."</td>";
        echo "<td><a href='detail_transaction.php?id=$user_data[invoice]'>Lihat Detail</a></td></tr>";        
    }
    ?>
    </table>
</body>
