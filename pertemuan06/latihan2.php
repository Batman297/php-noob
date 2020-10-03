<?php
/* $mahasiswa = [
 *     ["Tri Denda",
 *      "18416255201090",
 *      "if18.tridenda@mhs.ubpkarawang.ac.id",
 *      "Teknik Informatika"],
 *     ["Jamal",
 *      "18416255201111",
 *      "if18.jamalmidrad@mhs.ubpkarawang.ac.id",
 *      "Teknik Sipil"]
 * ]; */

// Array Associative
// definisinya sama seperti array numberik, kecuali
// key-nya adalah string yang kita buat sendiri
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
        <title>Jual Mobil Harga Rakyat</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Daftar Mobil</h1>
        <?php foreach ( $cars as $car ): ?>
            <ul>
                <li>
                    <img alt="" src="img/<?= $car["gambar"]; ?>"/>
                </li>
                <li>Nama : <?= $car["nama"]; ?></li>
                <li>Tahun : <?= $car["tahun"]; ?></li>
                <li>Transmisi : <?= $car["transmisi"]; ?></li>
                <li>Harga : <?= $car["harga"]; ?></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>
