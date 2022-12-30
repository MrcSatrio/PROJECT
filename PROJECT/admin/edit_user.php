<?php include 'header.php'; 
include_once("../koneksi.php");
$id = $_GET['id'];
$data = mysqli_query($koneksi,"select * from user where username='$id'");

?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<form method="post" action="process/edit_user.php">
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Level</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
while($user_data = mysqli_fetch_array($data)){   ?>      
    <input type="hidden" name="id" value="<?php echo $user_data['username']; ?>">
    <td><input type="text" name="nama" value="<?php echo $user_data['nama']; ?>"></td>
    <td><input type="text" name="username" value="<?php echo $user_data['username']; ?>"></td>
    <td><input type="email" name="email" value="<?php echo $user_data['email']; ?>"></td>
    <td><input type="text" name="level" value="<?php echo $user_data['level']; ?>"></td>
    <td><input type="text" name="password" value="<?php echo $user_data['password']; ?>"></td>
        <td>                  <input type="submit" value="Simpan" class='btn btn-sm btn-success' onClick='return confirm("Apakah Data Sudah Sesuai ?")'></input></td></tr>      
    <?php
      }
    ?>
    </table>
</form>
</body>
