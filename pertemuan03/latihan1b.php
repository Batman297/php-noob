<html>
  <head><title>Latihan 1</title></head>
  <body>
    <table border="1"  cellpadding="10" cellspacing="0">
        <?php for( $i=1; $i<=10; $i++ ) :  ?>
            <?php if ( $i % 2 == 1) : ?>
                <tr style="background: grey;">
            <?php else : ?>
                <tr>
            <?php endif; ?>
                <?php for( $j=1; $j<= 10; $j++ ) :  ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor; ?>
                </tr>
         <?php endfor; ?>
    </table>
  </body>
</html>
