<?php
//error_reporting(0);
include 'koneksi.php';
require 'function.php';
require 'function.php';

if (!isset($_SESSION["login"])){
    header("location: login.php");
    exit;
}

if(isset($_GET["id"])){
    $id = ($_GET["id"]);

    $result = mysqli_query($koneksi, "SELECT * FROM donasi WHERE id_donatur = '$id' ");

    while($row = mysqli_fetch_array($result)){
        $id_donatur = $row["id_donatur"];
        $nama = $row["nama"];
        $no_telp = $row["no_telp"];
        $email = $row["email"];
        $alamat = $row["alamat"];
        $kategori_donasi = $row["kategori_donasi"];
        $nilai_donasi = $row["nilai_donasi"];
        $jenis_barang = $row["jenis_barang"];
        $jumlah_barang = $row["jumlah_barang"];
        $penyaluran = $row['penyaluran'];
        $tanggal = $row["tanggal"];
        $pesan = $row["pesan"];
        $foto = $row["foto"];
    }

}else {
    header("location:index.php");
}
?>
<body>
<form action="ProsesEditData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">

<legend><h3>Data Mahasiswa</h3></legend>
<table>
    <tr>
        <tr>
            <td>ID Donatur</td>
            <td>:</td>
            <td>
                <input name="id_donatur" type="number" id="id_donatur" size="20" readonly 
                value="<?php echo $id_donatur; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input name="nama" type="text" id="nama" size="50" value="<?php echo $nama; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input name="nama" type="text" id="nama" size="50" value="<?php echo $nama; ?>"/>
            </td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>:</td>
            <td>
                <input name="no_telp" type="text" id="no_telp" size="20" value="<?php echo $no_telp; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <input name="email" type="text" id="email" size="50" value="<?php echo $email; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>
                <input name="alamat" type="text" id="alamat" size="100" value="<?php echo $alamat; ?>"/>
            </td>
        </tr>
        <tr>
            <td>Kategori Donasi</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="kategori_donasi" value="Donasi Uang" <?php echo $kategori_donasi; ?>/>Donasi Uang<br>
            <input type="checkbox" name="kategori_donasi" value="Donasi Barang" <?php echo $kategori_donasi; ?>/>Donasi Barang<br>
            </td>
        </tr>
        <tr>
            <td>Nilai Donasi</td>
            <td>:</td>
            <td><input name="nilai_donasi" type="text" id="nilai_donasi" size="100" 
            value="<?php echo $nilai_donasi; ?>"/></td>
        </tr>
        <tr>
            <td>Jenis Barang</td>
            <td>:</td>
            <td><input name="jenis_barang" type="text" id="jenis_barang" size="100" 
            value="<?php echo $jenis_barang; ?>"/></td>
        </tr>
        <tr>
            <td>Jumlah Barang</td>
            <td>:</td>
            <td><input name="jumlah_barang" type="text" id="jumlah_barang" size="50" 
            value="<?php echo $jumlah_barang; ?>"/></td>
        </tr>
        <tr>
            <td>Penyaluran</td>
            <td>:</td>
            <td>
            <input type="checkbox" name="penyaluran" value="langsung" <?php echo $penyaluran; ?>/>Langsung<br>
            <input type="checkbox" name="penyaluran" value="pengiriman" <?php echo $penyaluran; ?>/>Pengiriman<br>
            </td>
        </tr>
        <tr>
            <td>Tanggal</td>
            <td>:</td>
            <td><input type="date" name="tanggal" value="<?php echo $tanggal; ?>"/></td>
        </tr>
        <tr>
            <td>Pesan</td>
            <td>:</td>
            <td><input name="pesan" type="text" id="pesan" size="100" value="<?php echo $pesan; ?>"/></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>:</td>
            <td><input type="file" name="foto" id="foto"
            <?php echo $foto; ?>/></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="Edit" id="Edit" value="Edit"/></td>
        </tr>
</table>
</body>