
    <?php
	include 'header.php';
	include '../koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from transaksi where invoice='$id'");
	while($d = mysqli_fetch_array($data)){
        $harga = $d['total'];
		?>
<section class="vh-100 gradient-custom-2">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-10 col-lg-8 col-xl-6">
        <div class="card card-stepper" style="border-radius: 16px;">
          <div class="card-header p-4">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <p class="text-muted mb-2"> Invoice : <span class="fw-bold text-body"><?php echo $d['invoice']; ?></span></p>
                <p class="text-muted mb-0"> Tanggal Order : <span class="fw-bold text-body"><?php echo $d['waktu']; ?></span> </p>
              </div>
              <div>
              <h5 class="fw-normal mb-0"><a href="index.php">Menu Utama</a></h5>
              </div>
            </div>
          </div>
          <div class="card-body p-4">
            <div class="d-flex flex-row mb-4 pb-2">
              <div class="flex-fill">
                <h5 class="bold"><?php echo $d['nama_barang']; ?></h5>
                <p class="text-muted"><?php echo $d['jumlah']; ?> item</p>
                <h4 class="mb-3"> <?php echo "Rp.".number_format($harga); ?><span class="small text-muted"> via (<?php echo $d['metode']; ?>) </span></h4>
              </div>
            </div>
          </div>
          <div class="card-footer p-4">
            <div class="d-flex justify-content-between">
              <div class="border-start h-100"></div>
              <div class="border-start h-100"></div>
              <marquee behavior="alternate">
              <h5 class="fw-normal mb-0">TERIMAKASIH SUDAH BERBELANJA</h5>
</marquee>
              <div class="border-start h-100"></div>
              <h5 class="fw-normal mb-0"><a href="#!" class="text-muted"><i class="fas fa-ellipsis-v"></i></a>
              </h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
	include 'footer.html';
    }?>