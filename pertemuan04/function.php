<?php
function salam($waktu = "Datang", $nama = "Admin") {
    return "Selamat $waktu, $nama!";
}
?>

<!doctype html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1><?= salam(null, "Denda"); ?></h1>
    </body>
</html>
