<?php
session_start();

if( isset($_SESSION["login"]) ) {
    header("Location: index.php");
    exit;
}

require 'functions.php';

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
                    <button type="submit" name="login">Login</button>
                </li>
            </ul>
        </form>
    </body>
</html>
