<?php
require 'functions.php';

$id = $_GET["id"];

var_dump($id);

// cek apakah data berhasil / gagal
if( hapus($id) > 0 ) {
    echo "<script> alert('Data Berhasil Dihapus!');document.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!');</script>";
}
?>
