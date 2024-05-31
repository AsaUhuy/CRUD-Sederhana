<?php
require "koneksi.php";

if(isset($_POST['submit'])){
    $idkasir = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $pass = $_POST['password'];

    $query = mysqli_query($conn,"UPDATE tbkasir_18329 SET namakasir = '$nama', alamat = '$alamat', telp = '$telp', username = '$username' WHERE idkasir = $idkasir");

    header('location: index.php?h=datakasir');
}else {
    $id = $_GET['id'];
    $querytampil = mysqli_query($conn,"SELECT * FROM tbkasir_18329 WHERE idkasir=$id");
    while ($data = mysqli_fetch_array($querytampil)) {
        $namakasir = $data['namakasir'];
        $alamat = $data['alamat'];
        $telp = $data['telp'];
        $username = $data['username'];
    }
}
?>

<div class="card" style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #000000 96.69%);">
    <div class="card-header">
        <b>Tambah Data Kasir</b>
    </div>   
           <div class="card-body">
                <form action="" method="post" name="form-kasir">
                    <div class="card-body">
                      <input type="text" name="id" class="form-control" value="<?php echo $id ?>" hidden>
                        <div class="card-group">
                            <label for="nama"><b>Nama Kasir</b></label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Kasir" value="<?php echo $namakasir ?>"></input>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-group">
                            <label for="alamat"><b>Alamat</b></label>
                            <textarea name="alamat" class="form-control" placeholder="Alamat"><?php echo $alamat ?></textarea>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-group">
                            <label for="telp"><b>Telp</b></label>
                            <input type="number" name="telp" class="form-control" placeholder="Telepon" value="<?php echo $telp ?>"></input>
                        </div>
                    </div>

                    <div class="card-body">
                        <div class="card-group">
                            <label for="username"><b>Username</b></label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username ?>"></input>
                        </div>
                    </div>

                    <div>
                        <button type="submit" name="submit" class="btn btn-primary">Kirim</button>
                        <button type="reset" class="btn btn-default">RESET</button>
                    </div>
                </form>
            </div>
        </div>
</div>