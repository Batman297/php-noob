<!doctype html>
<html>
    <head>
        <title>POST</title>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php if( isset($_POST["submit"]) ) : ?>
        <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
        <?php endif; ?>
        <form method="post">
            Masukan nama :
            <input name="nama" type="text" value=""/>
            <br>
            <button type="subtmit" name="submit">Submit</button>
        </form>
    </body>
</html>
