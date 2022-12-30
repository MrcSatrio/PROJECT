<?php include '../koneksi.php'; 
include 'header.php'; 
$username = mysqli_real_escape_string($koneksi, $_SESSION['username']);
$result = mysqli_query($koneksi, "SELECT * FROM transaksi where username='$username'");
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<table class="table table-bordered table-striped">
  <thead>
  <tr>
    <th scope="col">Invoice</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Jumlah Pembayaran</th>
      <th scope="col">Tanggal Transaksi</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
    while($user_data = mysqli_fetch_array($result)) {   
      $total = $user_data['total'];         
        echo "<td>".$user_data['invoice']."</td>";
        echo "<td>".$user_data['nama_barang']."</td>";   
        echo "<td>"."Rp".number_format($total)."</td>";
        echo "<td>".$user_data['waktu']."</td>";
        echo "<td><a href='detail_history.php?id=$user_data[invoice]'>Lihat Detail</a></td></tr>";        
    }
    ?>
  </thead>
</table>
</div>
</div>
</div>
</body>