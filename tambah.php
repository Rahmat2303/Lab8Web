<?php
error_reporting(E_ALL);
include_once "koneksi.php";

if (isset($_POST['sumbit'])) {
    $nama = $_POST['nama'];
    $kategori = $_POST['kategori'];
    $harga_jual = $_POST['harga_jual'];
    $harga_beli = $_POST['harga_beli'];
    $stok = $_POST['stok'];
    $file_gambar = $_FILES['file_gambar'];
    $gambar = null;
    if ($file_gambar['error'] == 0) {
        $file_name = str_replace(' ', '_', $file_gambar['name']);
        $destination = dirname(__FILE__) . '/gambar/' . $file_name;
        if(move_uploaded_file($file_gambar['tmp_name'], $destination)) {
            $gambar = 'gambar/' . $file_name;
        }
    }
    $sql = 'INSERT INTO data_barang (nama, kategori, harga_jual, harga_beli, stok, gambar)';
    $sql .= "VALUE ('{$nama}', '{$kategori}', '{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')";
    $result = mysqli_query($conn, $sql);
    header ('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styleTambah.css">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container">
        <h1>Tambah barang</h1>
        <div class="main">
            <form action="tambah.php" method="post" enctype="multipart/form-data">
                <div class="input">
                    <label for="nama">Nama barang</label>
                    <input class="satu" type="text" name="nama" id="nama">
                </div>
                <div class="input">
                    <label for="">Kategori</label>
                    <select name="kategori" id="">
                        <option value="komputer">Komputer</option>
                        <option value="elektronik">Elektronik</option>
                        <option value="hand phone">Hand phone</option>
                    </select>
                </div>
                <div class="input">
                    <label for="">Harga jual</label>
                    <input class="dua" type="text" name="harga_jual">
                </div>
                <div class="input">
                    <label for="">Harga beli</label>
                    <input class="dua" type="text" name="harga_beli">
                </div>
                <div class="input">
                    <label for="">Stok</label>
                    <input class="tiga" type="text" name="stok">
                </div>
                <div class="input">
                    <label for="">File gambar</label>
                    <input class="empat" type="file" name="file_gambar">
                </div>
                <div class="submit">
                    <input class="lima" type="submit" name="sumbit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
</body>
</html>