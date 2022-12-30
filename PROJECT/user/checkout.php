<?php
include 'header.php';
	include '../koneksi.php';
	$id = $_GET['id'];
  $total = $_GET['total'];
	$data = mysqli_query($koneksi,"select * from barang where id_brg='$id'");
	while($d = mysqli_fetch_array($data)){
        $harga = $d['harga_brg'];
    $jumlah = $harga * $total;
    $ongkir = 10000;
    $hasil = $jumlah + $ongkir;
		?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body class="bg-light">
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Pembayaran</h2>
    </div>
    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Total Harga</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nama Produk</h6>
              <small class="text-muted"><?php echo $d['nama_brg']; ?></small>
            </div>
            <span class="text-muted"><?php echo "Rp.".number_format($harga); ?></span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
          <div>
              <h6 class="my-0">Jumlah Produk</h6>
            </div>
            <span class="text-muted"><?php echo $total; ?>x</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Ongkos Kirim</h6>
            </div>
            <span class="text-muted">Rp 10.000</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total</span>
            <strong><?php echo "Rp.".number_format($hasil); ?></strong>
          </li>
        </ul>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Alamat Pengiriman</h4>
        <form action="validation/validation_payment.php" methode="post">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
        <input type="hidden" name="nama_barang" value="<?php echo $d['nama_brg']; ?>">
        <input type="hidden" name="foto_barang" value="<?php echo $d['foto_brg']; ?>">
        <input type="hidden" name="harga_barang" value="<?php echo $d['harga_brg']; ?>">
        <input type="hidden" name="jumlah" value="<?php echo $total;?>">
        <input type="hidden" name="total" value="<?php echo $hasil;?>">
          <div class="row g-3">
            <div class="col-sm-12">
              <label for="firstName" class="form-label">Nama Penerima</label>
              <input type="text" name="nama" class="form-control" id="firstName" placeholder=""  required>
            </div>
            <div class="col-12">
              <label for="num" class="form-label">No Handphone</label>
              <input type="number" class="form-control" placeholder="No Handphone" name="handphone" required>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Alamat</label>
              <input type="text" class="form-control" name="alamat" placeholder="Jl. Menuju Kenangan" required>
            </div>
            <div class="col-md-5">
              <label for="country" class="form-label">Negara</label>
              <select class="form-select" name="negara" required>
                <option value="indonesia">Indonesia</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Provinsi</label>
              <select class="form-select" name="provinsi" required>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Lampung<">Lampung</option>
                <option value="Papua">Papua</option>
                <option value="Riau">Riau</option>
                <option value="Yogyakarta">Yogyakarta</option>
              </select>
            </div>
            <div class="col-md-3">
              <label for="zip" class="form-label">Kode Pos</label>
              <input type="text" class="form-control" name="kodepos" placeholder="" required>
            </div>
          </div>
          <hr class="my-4">
          <h4 class="mb-3">Metode Pembayaran</h4>
          <div class="my-3">
            <div class="form">
              <input type="radio" name="metode" value="COD"required>
              <label value="credit">Cash Or Duel</label>
            </div>
            <div class="form">
              <input type="radio" name="metode" value="Debit"required>
              <label value="debit">kartu Debit</label>
            </div>
            <div class="form">
              <input type="radio" name="metode" value="Paylater"required>
              <label value="paypal">Paylater</label>
            </div>
          </div>
          <hr class="my-4">
          <button class="w-100 btn btn-primary btn-lg" type="submit">Bayar Sekarang</button>
        </form>
      </div>
    </div>
  </main>
  <?php
include 'footer.html';?>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>
  <?php
    }?>
</html>
