<?php
include "koneksi.php";
include "aa.php";
?>
<br>
<h1> Input Petugas</h1>
<form action="petugas-simpan.php" method = "post">
    <table>
        <tr>
            <td>Nama Petugas</td>
            <td>:</td>
            <td><input type="text" name="nama_petugas" autofocus="" required  autocomplete="off" placeholder="Input Nama Petugas"></td>
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" autofocus="" required  autocomplete="off" placeholder="Input Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" required ></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>:</td>
            <td>
                <select name="level" required>
                    <option value="">Pilih Level</option>
                    <option value="admin">admin</option>
                    <option value="petugas">petugas</option>
                </select></td>
        </tr>
        <tr>
            <td><input type="submit" value="simpan"><a href="petugas.php">Cancel</a></td>
        </tr>
    </table>
</form>