<meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link rel="shortcut icon" href="../assets/gambar/banner/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">

    <?php 
	session_start();
  if ($_SESSION['level'] == "user") {
      header("location:../user/index.php");
  }else if($_SESSION['level']==""){
		header("location:../index.php?pesan=gagal");
	}
	?>
<div class="b-example-divider"></div>

  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
        <img src="../assets/gambar/banner/icon.jpg" alt="mdo" width="32" height="32">
        </a>
        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        &nbsp;
        <li><a href="index.php" class="nav-link px-2 link-secondary">Pengguna</a></li>
          <li><a href="product.php" class="nav-link px-2 link-secondary">Produk</a></li>
          <li><a href="transaction.php" class="nav-link px-2 link-secondary">Transaksi</a></li>
        </ul>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../assets/gambar/banner/icon.png" alt="mdo" width="32" height="32">
          </a>
          <ul class="dropdown-menu text-small">
          <li <a class="dropdown-item">Halo. <?php echo $_SESSION['username']; ?></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="logout.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>