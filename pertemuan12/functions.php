<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// functions query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($_data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $nama = htmlspecialchars($_data["nama"]);
    $tahun = htmlspecialchars($_data["tahun"]);
    $transmisi = htmlspecialchars($_data["transmisi"]);
    $harga = htmlspecialchars($_data["harga"]);
    $gambar = htmlspecialchars($_data["gambar"]);

    // query insert data
    $query = "INSERT INTO cars
              VALUES (null, '$nama', '$tahun', '$transmisi', '$harga', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM cars WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function ubah($_data) {
    global $conn;

    // ambil data dari tiap elemen dalam form
    $id = $_data["id"];
    $nama = htmlspecialchars($_data["nama"]);
    $tahun = htmlspecialchars($_data["tahun"]);
    $transmisi = htmlspecialchars($_data["transmisi"]);
    $harga = htmlspecialchars($_data["harga"]);
    $gambar = htmlspecialchars($_data["gambar"]);

    // query insert data
    $query = "UPDATE cars SET
               nama = '$nama', tahun = '$tahun', transmisi = '$transmisi', harga = '$harga', gambar = '$gambar' WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM cars WHERE
              nama LIKE '%$keyword%' OR
              tahun LIKE '%$keyword%' OR
              transmisi LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
    ";

    return query($query);
}
?>
