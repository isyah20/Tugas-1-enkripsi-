<?php include('koneksi.php');



session_start();
require 'function.php';


if (!isset($_SESSION["login"])){
    header("location: pass.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="">
    <p>
            <h2>Password Asli</h2>
            <h3><?php echo ucwords($_SESSION['pass'])?></h3>
        </p>
        <p>
            <h2>Password Enkripsi </h2>
            <h3><?php echo ucwords($_SESSION['password'])?><h3>
        </p>
    </form>
    


</body>
</html>