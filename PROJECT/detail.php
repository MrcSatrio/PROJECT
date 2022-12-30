<?php
	session_start();
include 'header.html';  
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from barang where id_brg='$id'");
	while($d = mysqli_fetch_array($data)){
        $harga = $d['harga_brg'];
		?>
<section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><?php echo "<img class='card-img-top mb-5 mb-md-0' src='assets/gambar/produk/$d[foto_brg]'/>"?></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder"><?php echo $d['nama_brg']; ?></h1>
                        <div class="fs-5 mb-5">
                            <span><?php echo "Rp.".number_format($harga); ?></span> 
                        </div>
                        <p class="lead"><?php echo $d['deskripsi']; ?></p>
                        <br>
                        <form method="post" <?php echo "action='validation/validation_checkout.php?id=$d[id_brg]'"?>>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" name="jumlah" type="number" placeholder="Jumlah" style="max-width: 6rem" required/>
                            <?php
  if (isset($_SESSION['level']) && $_SESSION['level'] == "user") {
    echo "<button class='btn btn-outline-primary me-2' type='submit' value='SIMPAN'>Beli Sekarang</button>";
  } else {
        echo "<button type='button' class='btn btn-outline-primary me-2' data-bs-toggle='modal' data-bs-target='#exampleModal'>Beli Sekarang</button>";
  }
?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
    </body>
    
    <?php
    }
    include 'footer.html';?>