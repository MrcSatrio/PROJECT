<?php include 'header.php'; 
include_once("../koneksi.php");
$result = mysqli_query($koneksi, "SELECT * FROM user ORDER BY username DESC");
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<a href="add_user.php">Tambah Pengguna</a><br/><br/>
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Level</th>
      <th scope="col">Password</th>
      <th scope="col">Time</th>
      <th scope="col">Action</th>
    </tr>
    <?php   
    while($user_data = mysqli_fetch_array($result)) {   ?>      
       <?php echo "<td>".$user_data['nama']."</td>"; ?> 
       <?php echo "<td>".$user_data['username']."</td>"; ?> 
       <?php echo "<td>".$user_data['email']."</td>";    ?> 
       <?php echo "<td>".$user_data['level']."</td>";  ?> 
       <?php echo "<td>".$user_data['password']."</td>"; ?> 
       <?php echo "<td>".$user_data['waktu']."</td>"; ?> 
        <td><a href="edit.php?id=<?php echo $user_data['username'];?>" class='btn btn-sm btn-warning'>Edit</a>
                  <a href="process/delete_user.php?id=<?php echo $user_data['username'];?>" class='btn btn-sm btn-danger' onClick='return confirm("Yakin mau di Hapus?")'>Delete</a></td></tr>      
    <?php
      }
    ?>
    </table>
</body>
