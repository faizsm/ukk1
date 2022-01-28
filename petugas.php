<?php
include "koneksi.php";
include "aa.php";
?>
<br>
    <h1>Rekapitulasi Petugas</h1>
    <a href="petugas-tambah.php">+ tambah</a>
    <table border='1' width="60%">
        <tr height="40">
            <th>No.</th>
            <th>Username</th>
            <th>Nama Petugas</th>
            <th>Level</th>
            <th>Aksi</th>
        </tr>
    <?php
    $no1=1;
    $sql = "SELECT * FROM petugas";
    $query = mysqli_query($koneksi,$sql);
    while($data=mysqli_fetch_array($query)){?>
    <tr>
        <td align="center"><?= $no1++;?>.</td>
        <td><?= $data['username']?></td>
        <td><?= $data['nama_petugas']?></td>
        <td><?= $data['level']?></td>
        <td align="center"><a href="petugas-edit.php?id_petugas=<?=$data['id_petugas'];?>">Edit</a>
        | <a href="petugas-edit.php?id_petugas=<?=$data['id_petugas'];?>">Hapus</a></td>
    </tr>
    <?php
    }?>
    </table>
</body>
</html>