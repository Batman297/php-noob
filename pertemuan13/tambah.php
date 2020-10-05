<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {

    // cek apakah data berhasil / gagal
    if( tambah($_POST) > 0 ) {
        echo "<script>
                alert('Data Berhasil Ditambahkan!');
                document.location.href = 'index.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan!');
              </script>";
    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Tambah Data Mobil</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Tambah Data Mobil</h1>

        <form action="" method="post" enctype="multipart/form-data">
            <ul>
                <li>
                    <label for="nama">Nama :</label>
                    <input id="nama" name="nama" type="text" value=""/>
                </li>
                <li>
                    <label for="tahun">Tahun :</label>
                    <input id="tahun" name="tahun" type="text" value=""/>
                </li>
                <li>
                    <label for="transmisi">Transmisi :</label>
                    <input id="transmisi" name="transmisi" type="text" value=""/>
                </li>
                <li>
                    <label for="harga">Harga :</label>
                    <input id="harga" name="harga" type="text" value=""/>
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input id="gambar" name="gambar" type="file" value=""/>
                </li>
                <li>
                    <button type="submit" name="submit">Tambah Data!</button>
                </li>
            </ul>
        </form>
    </body>
</html>
