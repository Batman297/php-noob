<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$cars = query("SELECT * FROM cars WHERE id = $id")[0];

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

        <form action="" method="post">
            <input name="id" type="hidden" value="<?= $id ?>"/>
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input id="nama" name="nama" type="text" value="<?= $cars["nama"]; ?>"/>
                </li>
                <li>
                    <label for="tahun">Tahun :</label>
                    <input id="tahun" name="tahun" type="text" value="<?= $cars["tahun"]; ?>"/>
                </li>
                <li>
                    <label for="transmisi">Transmisi :</label>
                    <input id="transmisi" name="transmisi" type="text" value="<?= $cars["transmisi"]; ?>"/>
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input id="harga" name="harga" type="text" value="<?= $cars["harga"]; ?>"/>
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input id="gambar" name="gambar" type="text" value="<?= $cars["gambar"]; ?>"/>
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>
        </form>
    </body>
</html>
