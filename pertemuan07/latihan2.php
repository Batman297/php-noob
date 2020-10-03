<?php
// cek apakah ada data untuk $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["tahun"]) ||
    !isset($_GET["transmisi"]) ||
    !isset($_GET["harga"]) ||
    !isset($_GET["gambar"]) ) {
    // refirect
    header("Location: latihan1.php");
    exit;
}
?>
<!doctype html>
<html>
    <head>
        <title>Detail Mobil</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Detail Mobil</h1>
        <ul>
            <li><img alt="" src="img/<?= $_GET["gambar"]; ?>"/></li>
            <li><?= $_GET["nama"]; ?></li>
            <li><?= $_GET["tahun"]; ?></li>
            <li><?= $_GET["transmisi"]; ?></li>
            <li><?= $_GET["harga"]; ?></li>
        </ul>

        <a href="latihan1.php">Kembali ke daftar mobil</a>
    </body>
</html>
