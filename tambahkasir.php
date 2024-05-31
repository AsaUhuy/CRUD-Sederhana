<?php
    require "koneksi.php";

    if (isset($_POST['submit']))
    {
        # code...
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $username = $_POST['username'];
        $pass = $_POST['password'];

        $query = mysqli_query($conn,"INSERT INTO tbkasir_18329 VALUES('','$nama','$alamat','$telp','$username',MD5('$pass'))");
    }
?>

<div class='card' style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #000000 96.69%);">
  <div class='card-header'>Tambah Data Kasir</div>
  <div class="card-body">
    <form action="" method="post" name="fomr-kasir" class="row g-3">
      
      <div class="col-12">
        <label for="inputAddress" class="form-label">Nama</label>
        <input type="text" name="nama" class="form-control" id="inputAddress" placeholder="Masukan nama...">
      </div>

      <div class="col-12">
        <label for="inputAddress" class="form-label">Alamat</label>
        <input type="text" name="alamat" class="form-control" id="inputAddress" placeholder="Masukan alamat...">
      </div>
      
      <div class="col-12">
        <label for="inputCity" class="form-label">Telp</label>
        <input type="text" name="telp" class="form-control" id="inputCity" placeholder="Ex: 083131578287">
      </div>

      <div class="col-md-6">
        <label for="inputAddress2" class="form-label">Username</label>
        <input type="text" name="username" class="form-control" id="inputAddress2" placeholder="Masukan username...">
      </div>

      <div class="col-md-6">
        <label for="inputPassword4" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Masukan Password...">
      </div>


      <div class="col-12">
        <button type="submit" name="submit" class="btn btn-success">Kirim</button>
        <button type="submit" name="reset" class="btn btn-danger">Riset</button>
      </div>
</div>