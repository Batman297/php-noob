<?php
session_start();
require 'functions.php';

// cek cookien
if( isset($_COOKIE["id"]) && isset($_COOKIE["username"]) ) {
    $id = $_COOKIE["id"];
    $username = $_COOKIE["username"];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $username === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
}


        if( isset($_SESSION["login"]) ) {
            header("Location: index.php");
            exit;
        }


        if( isset($_POST["login"]) ) {

            $username = $_POST["username"];
            $password = $_POST["password"];

            $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

            // cek username
            if( mysqli_num_rows($result) === 1 ) {

                // cek password
                $row = mysqli_fetch_assoc($result);

                if( password_verify($password, $row["password"]) ) {
                    // set session
                    $_SESSION["login"] = true;

                    // cek remember me
                    if( isset($_POST["remember"]) ) {
                        // buat cookie
                        setcookie('id', $row['id'], time() + 60);
                        setcookie('username', hash('sha256', $row['username']), time()+60);
                    }
                    
                    header("Location: index.php");
                    exit;
                }
            }
            $error = true;
        }
?>
<!doctype html>
<html>
    <head>
        <title>Halaman Login</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Halaman Login</h1>
        <p>If you don't have any account please use "admin" as username and "admin" as password or you can create new account <a href="registrasi.php">HERE!</a></p>
        <?php if( isset($error) ) : ?>
            <p style="font-style: italic; color: red;">Username / Password Salah</p>
        <?php endif; ?>

        <form action="" method="post">
            <ul>
                <li>
                    <label for="username">Username :</label><br>
                    <input id="username" name="username" type="text" value="" placeholder="username" />
                </li>
                <li>
                    <label for="password">Password :</label><br>
                    <input id="password" name="password" type="password" value="" placeholder="*********" />
                </li>
                <li>
                    <label for="remember">Password :</label>
                    <input id="remember" name="remember" type="checkbox" value="" />
                </li>
                <li>
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
    </body>
</html>
