<?php
    session_start();
    include "koneksi.php"
?>
<!DOCTYPE html>
<head>
    <title>Projek saya</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <center><h2>Selamat Datang</h2></center>
    <form method ="post">
        <label>Username :</label>
        <input type="text" name ="fusername"><br>
        <label>Password :</label>
        <input type="password" name ="fpassword"><br>
        <button type="submit" name = "fmasuk">Login</button>
    </form>

    <?php
    if(isset($_POST['fmasuk'])){
        $username =$_POST['fusername'];
        $password =$_POST['fpassword'];
        $qry = mysqli_query($koneksi,"SELECT * FROM user WHERE username = '$username' AND password = md5('$password')");
        $cek = mysqli_num_rows($qry);
        if ($cek==1){
            $_SESSION['userweb']=$username;
            header ("location:admin.php");
            exit;
        }
        else{
            echo "salah harus bayar";
        }
    }   
    ?>
</body>
</html>