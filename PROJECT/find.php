<?php   include 'koneksi.php';
        include 'header.html'; 
        include 'banner.html'; 
        $id = $_GET['id'];?>
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
$data = mysqli_query($koneksi, "select * FROM `barang` WHERE `kategori` LIKE '$id'");
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
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="validasi/validasi-login.php">
          <div class="mb-3">
            <label for="Username" class="col-form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="mb-3">
            <label for="Password" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required></textarea>
            <input type="checkbox" onclick="myFunction()">Tampilkan Password
          </div> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">LOGIN</button>
      </div>
      </form>
    </div>
  </div>
</div>
&nbsp;
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Register</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" action="validasi/validasi-daftar.php">
      <div class="mb-3">
            <label for="Name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" name="name" required></textarea>
          </div> 
          <div class="mb-3">
            <label for="Email" class="col-form-label">Email</label>
            <input type="email" class="form-control" name="email" required></textarea>
          </div> 
          <div class="mb-3">
            <label for="Username" class="col-form-label">Username</label>
            <input type="text" class="form-control" name="username" required>
          </div>
          <div class="mb-3">
            <label for="Password" class="col-form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password" required></textarea>
            <input type="checkbox" onclick="myFunction()">Tampilkan Password
          </div> 
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">REGISTER</button>
      </div>
      </form>
          <script>
      function myFunction() {
          var x = document.getElementById("password");
          if (x.type === "password") {
              x.type = "text";
          } else {
              x.type = "password";
          }
      }
  </script>
		</div>
  </div>
          </div>
          
          </body>
          </html>
<?php include 'footer.html'; ?>