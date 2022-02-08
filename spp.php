<?php
include "koneksi.php";
include "aa.php";
?>
<br>
    <h1>Rekapitulasi Spp</h1>
    <a href="spp-tambah.php">+ tambah</a>
    <table border='1' width="50%">
        <tr height="40">
            <th>No.</th>
            <th>Tahun</th>
            <th>nominal</th>
            <th>Aksi</th>
        </tr>
    <?php
    $no1=1;
    $sql = "SELECT * FROM spp";
    $query = mysqli_query($koneksi,$sql);
    while($data=mysqli_fetch_array($query)){?>
    <tr>
        <td align="center"><?= $no1++;?>.</td>
        <td><?= $data['tahun']?></td>
        <td align="right"><?= number_format($data['nominal'])?></td>
        <td align="center"><a href="spp-edit.php?id_spp=<?=$data['id_spp'];?>">Edit</a>
        | <a href="spp-hapus.php?id_spp=<?=$data['id_spp'];?>">Hapus</a></td>
    </tr>
    <?php
    }?>
    </table>
</body>
</html>