<?php
//error_reporting(0);
include 'koneksi.php';

if(isset($_POST['Kirim_Donasi'])){
    $nama = $_POST['nama'];
    $no_telp = $_POST['no_telp'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $kategori_donasi = $_POST['kategori_donasi'];
    $nilai_donasi = $_POST['nilai_donasi'];
    $jenis_barang = $_POST['jenis_barang'];
    $jumlah_barang = $_POST['jumlah_barang'];
    $tanggal = $_POST['tanggal'];
    $penyaluran = $_POST['penyaluran'];
    $pesan = $_POST['pesan'];
    $foto = $_FILES['foto']['name'];
    $tmp = $_FILES['foto']['tmp_name'];
    $path = "image/".$foto;

    if(move_uploaded_file($tmp, $path)){
        $query = "INSERT INTO donasi VALUES ('', '$nama', '$no_telp', '$email', '$alamat', 
        '$kategori_donasi', '$nilai_donasi', '$jenis_barang', '$jumlah_barang', '$tanggal', '$penyaluran',
        '$pesan', '$foto')";

        $result = mysqli_query($koneksi, $query);

        if(!$result){
            die("Query gagal dijalankan : ".mysqli_errno($koneksi)."_".mysqli_error($koneksi));
        }
        else{
            echo "<script>alert('Terima kasih sudah berdonasi. No Rekening dan alamat penerimaan barang maupun uang akan diberitahukan melalui email');window.location.href='cover.php'</script>";
        }
    }
}
?>