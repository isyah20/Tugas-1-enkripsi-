<?php 
session_start();

if(!isset ($_SESSION["login"])){
    header("Location: login.php");
}

require 'function.php';
include 'koneksi.php';
//error_reporting(0);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Donasi Korban Bencana Alam </title>
        
    </head>
    <body>
        <a href="logout.php">Logout</a>
        <h1 style="text-align: center;">Donasi Korban Bencana Alam</h1>
        <body>
        <form action="registrasi.php">
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="Tambah Admin" id="Tambah Admin" value="Tambah Admin"/></td>
        </tr>
        <br>
        </form>
        </body>
        <br>
        <br>
        <table border="1" style="margin: auto;">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Kategori Donasi</th>
                <th>Nilai Donasi</th>
                <th>Jenis Barang</th>
                <th>Jumlah Barang</th>
                <th>Penyaluran</th>
                <th>Tanggal</th>
                <th>Pesan</th>
                <th>Foto</th>
                <th>Edit</th>
                <th>Hapus</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no=0;
            $result = mysqli_query($koneksi, "SELECT * FROM donasi ORDER BY id_donatur ASC");
            while($row = mysqli_fetch_array($result)){
                $no++
            ?>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['no_telp'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><?php echo $row['alamat'];?></td>
                <td><?php echo $row['kategori_donasi'];?></td>
                <td><?php echo $row['nilai_donasi'];?></td>
                <td><?php echo $row['jenis_barang'];?></td>
                <td><?php echo $row['jumlah_barang'];?></td>
                <td><?php echo $row['penyaluran'];?></td>
                <td><?php echo $row['tanggal'];?></td>
                <td><?php echo $row['pesan'];?></td>
                <td>
                    <center>
                        <img src="image/<?php echo $row['foto'];?>"
                        border="0" width="70px" height="70px"/>
                    </center>
                </td>
                <td>
                    <a href="EditData.php?id=<?php echo $row['id_donatur'];?>">Edit</a>
                </td>
                <td>
                    <a href="HapusData.php?id=<?php echo $row['id_donatur'];?>">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        </table>
        <br>
        <br>
    </body>
</html>