<?php
include "koneksi.php";
session_start();
$username= $_POST['username'];
$password= $_POST['password'];

$sql= "SELECT*FROM petugas WHERE username ='$username' AND password='$password'";
$query= mysqli_query($koneksi,$sql);
if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    $_SESSION['level'] = $data['level'];
    $_SESSION['nama'] = $data['nama_petugas'];
    header("location:home.php");
}else{
   
    $sql1= "SELECT*FROM siswa WHERE nisn ='$username' AND nis ='$password'";
    $query1= mysqli_query($koneksi,$sql1);
    if(mysqli_num_rows($query1)>0){
        $data1 = mysqli_fetch_array($query1);
        $_SESSION['level'] = 'siswa';
        $_SESSION['nama'] = $data1['nama'];   
        header("location:home.php");
    }else{
    echo "username dan password salah";
    header("refresh:3;url=index.php");
    }
}

?>