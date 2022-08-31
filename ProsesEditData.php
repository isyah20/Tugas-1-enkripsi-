<?php
//error_reporting(0);
include 'koneksi.php';
require 'function.php';

if (isset($_POST['Edit'])){
    $id_donatur = $_POST['id_donatur'];
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $emai = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kategori_donasi = $_POST['kategori_donasi'];
    $nilai_donasi = $_POST['nilai_donasi'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $penyaluran = $_POST['penyaluran'];
    $tanggal = $_POST['tanggal'];
    $pesan = $_POST['pesan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/".$foto;

    if(empty($foto)){
        $query = "UPDATE donasi set nama = '$nama', no_telp = '$no_telp', email = '$emai', alamat = '$alamat',
        kategori_donasi = '$kategori_donasi', nilai_donasi = '$nilai_donasi',jenis_barang = '$jenis_barang', 
        jumlah_barang = '$jumlah_barang', penyaluran = '$penyaluran', tanggal = '$tanggal', pesan = 'pesan' 
        where id_donatur = '$id_donatur' ";
    }
    else {
        $file = mysqli_query($koneksi, "SELECT foto FROM donasi where id_donatur = '$id_donatur' ");
        $hasil = mysqli_fetch_array($file);
        $foto_lama = $hasil['foto'];
        unlink("image/".$foto_lama);

        if(move_uploaded_file($tmp, $path)){
            $query = "UPDATE donasi set nama = '$nama', no_telp = '$no_telp', email = '$emai', 
            alamat = '$alamat',kategori_donasi = '$kategori_donasi', nilai_donasi = '$nilai_donasi', 
            jenis_barang = '$jenis_barang', jumlah_barang = '$jumlah_barang', penyaluran = '$penyaluran', 
            tanggal = '$tanggal', pesan = '$pesan', foto = '$foto' where id_donatur = '$id_donatur' "; 
        }
    }

    $result=mysqli_query($koneksi,$query);

    if (!$result)
    {
        die("Data gagal diubah; ".mysqli_errno($koneksi).mysqli_error($koneksi))
        ;
    }
    else
    {
        echo "<script>alert('Data Berhasil Diubah');window.location.href='index.php'</script>";
    }
}
?>