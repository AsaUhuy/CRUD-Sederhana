<div class="card">
    <div class="card-header" style="background:linear-gradient(69.66deg, #00C1FE 19.39%, #000000 96.69%);">
    <span style="float: left;">
        <h3>Data Kasir</h3>
    </span>
            <span style="float: right;">
                <a class="btn btn-info text-white" href="index.php?h=tambahkasir">Tambah Data</a>
            </span>
    </div>
    <div class="card-body" >
        <table class="table table-bordered table-hover">
            <tr >
                <th >No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Telp</th>
                <th>Username</th>
                <th>Opsi</th>
            </tr>
            <?php
                require "koneksi.php";
                $no = 1;
                $sql = mysqli_query($conn,"select * from tbkasir_18329");

                while ($data = mysqli_fetch_array($sql))
                {                  
                ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['namakasir']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td><?php echo $data['telp']; ?></td>
                <td><?php echo $data['username']; ?></td>
                <td>
                
                    <a href="index.php?h=editkasir&id=<?php echo $data['idkasir'] ?>" class="btn btn-warning">EDIT</a>
                    <a href="index.php?h=hapuskasir&id=<?php echo $data['idkasir'] ?>" onclick="return confirm('Yakin ingin menghapus data kasir ini?')" ><i  class="fa-sharp fa-solid fa-trash"></i></a>
                </td>
            </tr>
            <?php
                    }
                ?>
        </table>
    </div>
</div>