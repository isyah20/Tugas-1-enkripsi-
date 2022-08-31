<?php
//error_reporting(0);
include 'koneksi.php';
require 'function.php';

if(isset($_POST["register"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if(registrasi($_POST) > 0){
        echo"<script>alert('User berhasil ditambahkan');window.location.href='login.php'</script>";
    }
    else{
        echo mysqli_error($conn);
    }
}
?>

<!<!DOCTYPE html>
<html>
    <head>
        <title>Registrasi</title>
        <style>
            label {
                display:block;
            }
        </style>
    </head>
    <body>
        <h1>Registrasi</h1>
        <form action="" method="post">
            <ul>
            <tr>
                <li><td>Username</td>
                <td>:</td></li>
                <label for="username"></label>
                <td><input name="username" type="text" id="username"/></td>
            </tr>
            <br>
            <br>
            <tr>
                <li><td>Password</td>
                <td>:</td></li>
                <label for="password"></label>
                <td><input type="password" name="password" id="password"/></td>
            </tr>
            <br>
            <br>
            <tr>
                <li><td>Konfirmasi Password</td>
                <td>:</td></li>
                <label for="password2"></label>
                <td><input type="password" name="password2" id="password2"/></td>
            </tr>
            <br>
            <br>
            <tr>
                <td>
                <button type="submit" name="register">Register</button>
                </td>
            </tr>
            </ul>
        </form>
    </body>
</html>
