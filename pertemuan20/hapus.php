<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$id = $_GET["id"];

// cek apakah data berhasil / gagal
if( hapus($id) > 0 ) {
    echo "<script> alert('Data Berhasil Dihapus!');document.location.href = 'index.php';</script>";
} else {
    echo "<script>alert('Data Gagal Dihapus!');</script>";
}
?>
