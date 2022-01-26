<?php
session_start();
$level = $_SESSION['level'];
$nama = $_SESSION['nama'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>WELCOME HOME</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
    <li><a href="home.php">H O M E</a></li>
    <?php
    if($level=="admin"){?>
        <li><a href="petugas.php">Master petugas</a></li>
        <li><a href="spp.php">Master SPP</a></li>
        <li><a href="kelas.php">Master kelas</a></li>
        <li><a href="siswa.php">Master siswa</a></li>
        <?php
    }if($level!="siswa"){?>
        <li><a href="pembayaran.php">pembayaran</a></li>
        <?php
    }
    if($level=="siswa"){?>
        <li><a href="history.php">history</a></li>
    <?php
    }
    if($level!="siswa"){?>
        <li><a href="laporan.php">Laporan</a></li>
    <?php
    }?>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    <br>
    <h1>Selamat Datang Di Aplikasi <br> Pembayaran SPP</h1>
    
</body>
</html>