<?php 
    require "koneksi.php";
    $id = $_GET['id'];

    $query = mysqli_query($conn,"DELETE FROM tbkasir_18329 WHERE idkasir = $id");
    header('location:index.php?h=datakasir');
    
?>