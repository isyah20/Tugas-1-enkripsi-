<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'UTS_Syahharbanu');

if(!$koneksi)
{
    die("koneksi dengan database gagal : ".mysqli_connect_errno().mysqli_connect_error());
}
?>