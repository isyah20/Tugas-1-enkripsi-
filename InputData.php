<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <center>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title> Donasi Korban Bencana Alam </title>
    </head>
    <body>
        <form action="ProsesInputData.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
            <fieldset>
                <center><h2>Form Donasi</h2></center>
                <table>
                    
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input name="nama" type="text" id="nama" size="50" required/></td>
                    </tr>
                    <tr>
                        <td>No Telp</td>
                        <td>:</td>
                        <td><input name="no_telp" type="text" id="no_telp" size="20" required/></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input name="email" type="text" id="email" size="50" required/></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input name="alamat" type="text" id="alamat" size="100" required/></td>
                    </tr>
                    <tr>
                        <td>Kategori Donasi</td>
                        <td>:</td>
                        <td>
                        <input type="checkbox" name="kategori_donasi" value="Donasi Uang"/>Donasi Uang<br>
                        <input type="checkbox" name="kategori_donasi" value="Donasi Barang"/>Donasi Barang<br>
                        <input type="checkbox" name="kategori_donasi" value="Donasi Uang Dan Barang"/>Donasi Uang Dan Barang<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Nilai Donasi</td>
                        <td>:</td>
                        <td><input name="nilai_donasi" type="text" id="nilai_donasi" size="100" value="Rp. "/></td>
                    </tr>
                    <tr>
                        <td>Jenis Barang</td>
                        <td>:</td>
                        <td><input name="jenis_barang" type="text" id="jenis_barang" size="100"/></td>
                    </tr>
                    <tr>
                        <td>Jumlah Barang</td>
                        <td>:</td>
                        <td><input name="jumlah_barang" type="text" id="jumlah_barang" size="50"/></td>
                    </tr>
                    <tr>
                        <td>Penyaluran</td>
                        <td>:</td>
                        <td>
                        <input type="checkbox" name="penyaluran" value="langsung"/>Langsung<br>
                        <input type="checkbox" name="penyaluran" value="pengiriman"/>Pengiriman<br>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal</td>
                        <td>:</td>
                        <td><input type="date" name="tanggal" required/></td>
                    </tr>
                    <tr>
                        <td>Pesan</td>
                        <td>:</td>
                        <td><input name="pesan" type="text" id="pesan" size="100"/></td>
                    </tr>
                    <tr>
                        <td>Foto</td>
                        <td>:</td>
                        <td><input type="file" name="foto" id="foto"/>Foto bukti donasi</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" name="Kirim_Donasi" id="Kirim_Donasi" value="Kirim Donasi"/></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </body>
    </center>
</html>