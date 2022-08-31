<?php
//error_reporting(0);
include 'koneksi.php';
?>

<html>
    <body>
    <form action="InputData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
        <h1 style="text-align: center;">Donasi Korban Bencana Alam</h1>
        <center>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="Donasi" id="Donasi" value="Donasi" /></td>
        </tr>
        <br>
        </center>
    </form>
    </body>
    <body>
        <form action="login.php">
        <center>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="Admin" id="Admin" value="Admin"/></td>
        </tr>
        <br>
        </center>
        </form>
    </body>
</html>