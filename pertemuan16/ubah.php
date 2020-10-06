<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$car = query("SELECT * FROM cars WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil / gagal
    if( ubah($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Diubah!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Diubah!');
              </script>";
    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Ubah Data Mobil</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Ubah Data Mobil</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <input name="id" type="hidden" value="<?= $id ?>"/>
            <input name="gambarLama" type="hidden" value="<?= $car["gambar"]; ?>"/>
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input id="nama" name="nama" type="text" value="<?= $car["nama"]; ?>"/>
                </li>
                <li>
                    <label for="tahun">Tahun :</label>
                    <input id="tahun" name="tahun" type="text" value="<?= $car["tahun"]; ?>"/>
                </li>
                <li>
                    <label for="transmisi">Transmisi :</label>
                    <input id="transmisi" name="transmisi" type="text" value="<?= $car["transmisi"]; ?>"/>
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input id="harga" name="harga" type="text" value="<?= $car["harga"]; ?>" />
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input id="gambar" name="gambar" type="file" value=""/><br>
                    <img alt="" src="img/<?= $car["gambar"]; ?>"/>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>
        </form>
    </body>
</html>
