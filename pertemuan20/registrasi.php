<?php
session_start();
require 'functions.php';

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

// cek kalau tombol register ditekan
if( isset($_POST["register"]) ) {

    // function registrasi
    if( registrasi($_POST) > 0 ) {
        echo "<script>alert('User baru berhasil ditambahkan!');</script>";
        header("Location: login.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}

?>
<!doctype html>
<html>
    <head>
        <title>Halaman Registrasi</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Halaman Reigstrasi</h1>

        <p><a href="index.php">Home</a></p>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label><br>
                    <input id="username" name="username" type="text" value="" placeholder="username" />
                </li>
                <li>
                    <label for="password">Password :</label><br>
                    <input id="password" name="password" type="password" value="" placeholder="********" />
                </li>
                <li>
                    <label for="password2">Konfirmasi Password :</label><br>
                    <input id="password2" name="password2" type="password" value="" placeholder="********" />
                </li>
                <li>
                    <button type="submit" name="register">Register!</button>
                </li>
            </ul>
        </form>
        <br/><br/>
    </body>
</html>
