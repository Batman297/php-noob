<?php
require '../functions.php';

$keyword = $_GET["keyword"];
$query = "SELECT * FROM cars WHERE
              nama LIKE '%$keyword%' OR
              tahun LIKE '%$keyword%' OR
              transmisi LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
";

$cars = query($query);

?>

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
