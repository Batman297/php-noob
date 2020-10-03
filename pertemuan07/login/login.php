<?php
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
    // cek username & password
    if( $_POST["username"] == "admin" && $_POST["password"] == "123" ) {
        // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
        } else {
            // jika salah, tampilkan pesan kesalahan
            $error = true;
        }
}

var_dump($_POST);
?>

<!doctype html>
<html>
    <head>
        <title>Login</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <h1>Login Admin</h1>

        <?php if( isset($error) ) : ?>
            <p style="color: red; font-style: italic;">username / password salah!</p>
        <?php endif;  ?>
        <ul>
            <form action="" method="post">
                <li>
                    <label for="username">Username :</label>
                    <input id="username" name="username" type="text" value=""/>
                </li>
                <li>
                    <label for="password">Password :</label>
                    <input id="password" name="password" type="text" value=""/>
                </li>
                <i>
                    <button type="submit" name="submit">Login</button>
                </i>
            </form>
        </ul>
    </body>
</html>
