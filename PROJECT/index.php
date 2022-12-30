<?php include 'koneksi.php'; ?>
<?php include 'header.html'; ?>
<?php include 'banner.html'; ?>
<?php 

    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
        echo "<script>alert('Username dan Password tidak sesuai !')</script>";
      }
      elseif($_GET['pesan']=="logout"){
        echo "<script>alert('Anda Sudah Logout !')</script>";
    }
    elseif($_GET['pesan']=="daftar"){
      echo "<script>alert('Akun Berhasil Didaftarkan ! ')</script>";
  }
  }
    ?>
<body style="background-color: white">  
  <center>
      <h2>DAFTAR PRODUK</h2>
  </center>
  <div class="container">
<div class="panel">
    <div class="panel-body">
        <div class="row">
        <?php
include_once("koneksi.php");
$data = mysqli_query($koneksi, "SELECT * FROM barang");
while ($d = mysqli_fetch_array($data)) {
$harga = $d['harga_brg'];
?>
    <div class="col-3">
        <div class="card shadow p-3 mb-5 bg-body rounded">
            <img src="assets/gambar/produk/<?php echo $d['foto_brg'] ?>" class="card-img-top" >
            <div class="card-body">
                <h5 class="card-title"><?php echo $d['nama_brg'] ?></h5>
                <p class="card-text"> <h6 class="text-start">Rp.<?php echo number_format($harga) ?></h6></p>
                <div class="btn-group">
                    <a href="detail.php?id=<?php echo $d['id_brg']?>" class="btn btn-outline-success">Beli Sekarang</a> 
                </div>
            </div>
        </div>
    </div>
<?php
}
?>
        </div>
    </div>
</div>
</div>
  </div>
</div>    
          </body>
          </html>
<?php include 'footer.html'; ?>