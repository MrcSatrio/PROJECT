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
  <?php   
    while($user_data = mysqli_fetch_array($result)) {   
      $total = $user_data['total'];         
      echo "<tr>";
      echo "<th scope='col'>No Invoice</th>";
      echo "<td>{$user_data['invoice']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Nama Barang</th>";
      echo "<td>{$user_data['nama_barang']}</td>";   
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Jumlah</th>";
      echo "<td>{$user_data['jumlah']}</td>";  
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Total</th>";
      echo "<td>Rp" . number_format($total) . "</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Waktu pemesanan </th>";
      echo "<td>{$user_data['waktu']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Metode Pembayaran</th>";
      echo "<td>{$user_data['metode']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Nama Penerima</th>";
      echo "<td>{$user_data['nama']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Alamat Penerima</th>";
      echo "<td>{$user_data['alamat']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Provinsi</th>";
      echo "<td>{$user_data['provinsi']}</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<th scope='col'>Kode Pos</th>";
      echo "<td>{$user_data['kodepos']}</td>";
      echo "</tr>";
    }
    ?>
    </table>
</body>

