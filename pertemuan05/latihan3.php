<?php
$mahasiswa = [
    ["Tri Denda",
     "18416255201090",
     "Teknik Informatika",
     "if18.tridenda@mhs.ubpkarawang.ac.id"],
    ["Sandhika Galih",
     "043040023",
     "Teknik Informatika",
     "sandhikagalih@unpas.ac.id"]
];
?>

<!doctype html>
<html>
    <head>
        <title>Daftar Mahasiswa</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Daftar Mahasiswa</h1>

        <?php foreach ( $mahasiswa  as $mhs ): ?>
            <ul>
                <li><?= $mhs[0]; ?></li>
                <li><?= $mhs[1]; ?></li>
                <li><?= $mhs[2]; ?></li>
                <li><?= $mhs[3]; ?></li>
            </ul>
        <?php endforeach; ?>
    </body>
</html>
