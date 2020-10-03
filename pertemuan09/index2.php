<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM cars");

// cek apakah query berhasil
/* if( !$result ) {
 *     echo mysqli_error($conn);
 * } */

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // mengembalikan array numberik
// mysqli_fetch_assoc() // mengembalika array associative
// mysqli_fetch_array() // mengembalikan array numberik dan associative
// mysqli_fetch_object() //

/* while( $cars = mysqli_fetch_assoc($result) ) {
 *     var_dump($cars);
 * } */
?>
<!doctype html>
<html>
    <head>
        <title>Jual Mobil Harga Rakyat</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Daftar Mobil</h1>

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
            <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <a href="">ubah</a> |
                        <a href="">hapus</a>
                    </td>
                    <td>
                        <img alt="" src="img/<?= $row["gambar"]; ?>" width="50"/>
                    </td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["tahun"]; ?></td>
                    <td><?= $row["transmisi"]; ?></td>
                    <td><?= $row["harga"]; ?></td>
                </tr>
            <?php $i++ ?>
            <?php endwhile; ?>
        </table>
    </body>
</html>
