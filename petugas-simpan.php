<?php
include "koneksi.php";
include "aa.php";
$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$sql = "INSERT INTO petugas(id_petugas,username,password,nama_petugas,level) VALUES('','$username','$password','$nama_petugas','$level')";

mysqli_query($koneksi,$sql);
header("location:petugas.php");
?>