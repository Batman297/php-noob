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

    // upload gambar
    $gambar = upload();
    if( $gambar == false) {
        return false;
    }

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
    $gambarLama = htmlspecialchars($_data["gambarLama"]);

    // cek apakah user pilih gambar baru atau tidak
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

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

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "<script>alert('Pilih gambar terlebih dahulu!');</script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>alert('Yang anda upload bukan gambar');</script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>alert('Ukuran gambar terlalu besar');</script>";
        return false;
    }
    
    // lolos pengecekan, gambar siap diupload
    // generate nama file baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '_' . $namaFile;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;
}

?>
