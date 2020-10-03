<?php
// Variable Scope / lingkup variabel
// Superglobals
// merupakan Array associative
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

$cars = [
    [
        "nama" => "Bluevard",
        "tahun" => "1999",
        "transmisi" => "Otomatis",
        "harga" => "Rp. 500.000.000",
        "gambar" => "blue.jpeg"
    ],
    [
        "nama" => "Browncy",
        "tahun" => "2050",
        "transmisi" => "Manual",
        "harga" => "Rp. 1.500.000.000",
        "gambar" => "brown.jpeg"
    ],
    [
        "nama" => "Greyota",
        "tahun" => "2020",
        "transmisi" => "Otomatis",
        "harga" => "Rp. 300.000.000",
        "gambar" => "grey.jpeg"
    ],
    [
        "nama" => "Pinkyundai",
        "tahun" => "2019",
        "transmisi" => "Manual",
        "harga" => "Rp. 250.000.000",
        "gambar" => "pink.jpeg"
    ],
    [
        "nama" => "Purpleogini",
        "tahun" => "2005",
        "transmisi" => "Otomatis",
        "harga" => "Rp. 100.000.000",
        "gambar" => "purple.jpeg"
    ],
    [
        "nama" => "Redonda",
        "tahun" => "2013",
        "transmisi" => "Manual",
        "harga" => "Rp. 50.000.000",
        "gambar" => "red.jpeg"
    ],
    [
        "nama" => "Whiterarry",
        "tahun" => "2040",
        "transmisi" => "Otomatis",
        "harga" => "Rp. 1.500.000.000",
        "gambar" => "white.jpeg"
    ],
];
?>

<!doctype html>
<html>
    <head>
        <title>GET</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Daftar Mobil</h1>
        <?php foreach ( $cars as $car ): ?>
            <ul>
                <li><a href="latihan2.php?nama=<?= $car["nama"]; ?>&tahun=<?= $car["tahun"]; ?>&transmisi=<?= $car["transmisi"]; ?>&harga=<?= $car["harga"]; ?>&gambar=<?= $car["gambar"]; ?>"><?= $car["nama"]; ?></a></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>
