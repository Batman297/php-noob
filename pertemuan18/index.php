<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// import file functions
require 'functions.php';

// pagination
// configuration
$jumlahDataPerHalaman = 5;
$jumlahData = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM cars"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["hal"]) ) ? $_GET["hal"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$cars = query("SELECT * FROM cars LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $cars = cari($_POST["keyword"]);
}
?>
<!doctype html>
<html>
    <head>
        <title>Jual Mobil Harga Rakyat</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Daftar Mobil</h1>

        <a href="tambah.php">Tambah Data Mobil</a> |
        <a href="login.php">Login</a> |
        <a href="logout.php">Logout</a>
        <br/><br/>

        <form action="" method="post">
            <input name="keyword" type="text" value="" size="75" autofocus placeholder="Masukan keywod pencarian" autocomplete="off" />
            <button type="submit" name="cari">Cari</button>
        </form>
        <br/>

        <!-- navigasi -->
        <?php if( $halamanAktif > 1 ) : ?>
            <a href="?hal=<?= $halamanAktif - 1 ?>">&laquo;</a>
        <?php endif; ?>
        <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
            <?php if( $i == $halamanAktif ) : ?>
                <a href="index.php?hal=<?= $i ?>" style="font-weight:bold; color: red;" ><?= $i ?></a>
            <?php else : ?>
                <a href="index.php?hal=<?= $i ?>"><?= $i ?></a>
            <?php endif; ?>
        <?php endfor; ?>
        <?php if( $halamanAktif < $jumlahHalaman ) : ?>
            <a href="?hal=<?= $halamanAktif + 1 ?>">&raquo;</a>
        <?php endif; ?>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Tahun</th>
                <th>Transmisi</th>
                <th>Harga</th>
            </tr>
            <?php $i = 1 ?>
            <?php foreach( $cars as $car ) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="ubah.php?id=<?= $car["id"]; ?>">ubah</a> |
                        <a href="hapus.php?id=<?= $car["id"]; ?>" onclick="return confirm('Apakah anda yakin?');">hapus</a>
                    </td>
                    <td>
                        <img alt="" src="img/<?= $car["gambar"]; ?>" width="50"/>
                    </td>
                    <td><?= $car["nama"]; ?></td>
                    <td><?= $car["tahun"]; ?></td>
                    <td><?= $car["transmisi"]; ?></td>
                    <td><?= $car["harga"]; ?></td>
                </tr>
            <?php $i++ ?>
            <?php endforeach; ?>
        </table>
    </body>
</html>
