<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

// import file functions
require 'functions.php';

$cars = query("SELECT * FROM cars");

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
        <style>
         .loader {
             width: 80px;
             position: absolute;
             top: 110px;
             left: 640px;
             z-index: -1;
             display: none;
         }

        </style>
    </head>
    <body>
        <h1>Daftar Mobil</h1>

        <a href="tambah.php">Tambah Data Mobil</a> |
        <a href="login.php">Login</a> |
        <a href="registrasi.php">Registrasi</a> |
        <a href="logout.php">Logout</a>
        <br/><br/>

        <form action="" method="post">
            <input name="keyword" type="text" value="" size="75" autofocus placeholder="Masukan keywod pencarian" autocomplete="off" id="keyword" />
            <button type="submit" name="cari" id="tombol-cari" >Cari</button>

            <img alt="" src="img/loader.gif" class="loader" />
        </form>
        <br/>

        <div id="container">
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
        </div>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>
