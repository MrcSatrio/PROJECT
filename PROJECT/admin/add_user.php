<?php include 'header.php'; 
?>
<body>
<div class="container"> <div class="panel">
<div class="panel-body">
<form method="post" action="process/add_user.php" enctype="multipart/form-data">
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
    <td><input type="text" name="name" required></td>
    <td><input type="text" name="username" required></td>
    <td><input type="email" name="email" required></td>
    <td><input type="text" name="level" required></td>
    <td><input type="password" name="password" required></td>
    <td><input type="submit" value="SIMPAN" onClick='return confirm("Apakah Data Sudah Sesuai ?")'></td>
    </table>
</body>
