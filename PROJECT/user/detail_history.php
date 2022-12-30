<?php include 'header.php'; 
include_once("../koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($koneksi, "SELECT * FROM transaksi where invoice='$id'");
?>
<body>
  <thead>
    <?php
    while ($user_data = mysqli_fetch_array($result)) {
      $total = $user_data['total'];
      $harga = $user_data['harga_barang'];
      
?>
<section class="h-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-10 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="card-header px-4 py-5">
            <h5 class="text-muted mb-0">Terimakasih Sudah Berbelanja, <span style="color: #a8729a;"><?php echo $user_data['username']; ?></span>!</h5>
          </div>
          <div class="card-body p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
              <p class="lead fw-normal mb-0" style="color: #a8729a;">Detail Pengiriman</p> 
            </div>
            <div class="card shadow-0 border mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-2">
                  <?php echo "<img class='card-img-top mb-5 mb-md-0' src='../assets/gambar/produk/$user_data[foto_barang]'/>"?>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0"><?php echo $user_data['nama_barang']; ?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small">Jumlah: <?php echo $user_data['jumlah']; ?></p>
                  </div>
                  <div class="col-md-2 text-center d-flex justify-content-center align-items-center">
                    <p class="text-muted mb-0 small"><?php echo "Rp.".number_format($harga); ?></p>
                  </div>
                </div>
                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                <div class="row d-flex align-items-center">
                  <div class="col-md-2">
                    <p class="text-muted mb-0 small">Lacak Pemesanan</p>
                  </div>
                  <div class="col-md-10">
                    <div class="progress" style="height: 6px; border-radius: 16px;">
                      <div class="progress-bar" role="progressbar"
                        style="width: 20%; border-radius: 16px; background-color: #a8729a;" aria-valuenow="20"
                        aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="d-flex justify-content-around mb-1">
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Pesanan dalam Pengiriman</p>
                      <p class="text-muted mt-1 mb-0 small ms-xl-5">Terkirim</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex justify-content-between pt-2">
              <p class="fw-bold mb-0">Detail pemesanan</p>
            </div>
            <div class="d-flex justify-content-between pt-2">
              <p class="text-muted mb-0">No Invoice : <?php echo $user_data['invoice']; ?></p>
            </div>
            <div class="d-flex justify-content-between">
              <p class="text-muted mb-0">Waktu Order : <?php echo $user_data['waktu']; ?></p>
            </div>
          </div>
          <div class="card-footer border-0 px-4 py-5"
            style="background-color: #a8729a; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
            <h5 class="d-flex align-items-center justify-content-end text-white text-uppercase mb-0">Total Pembayaran
              <span class="h2 mb-0 ms-2"><?php echo "Rp.".number_format($total); ?></span></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><?php } 
include 'footer.html';?>