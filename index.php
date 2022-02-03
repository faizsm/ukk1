<!DOCTYPE html>
<html lang="en">
<head>
    <title>LOGIN</title>
</head>
<body>
    <h1>form login</h1>
    <form action="proses.php" method = "post">
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" autofocus required placeholder="Username" autocomplete ="off"></td>
        </tr><br>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" autofocus required placeholder="Password"></td>
    </tr><br>
        <tr>
            <td><input type="submit" value="Login"  ></td>
        </tr>
    </form>
</body>
</html>