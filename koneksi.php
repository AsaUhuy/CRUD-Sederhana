<?php
$namaserver = "localhost";
$username = "root";
$pass = "";
$namadatabase = "dbappresto_18329";
$conn = mysqli_connect("localhost","root","","dbappresto_18329");

if(mysqli_connect_errno())
{
    echo "Koneksi ke Database Gagal :".mysqli_connect_error();
}
?>