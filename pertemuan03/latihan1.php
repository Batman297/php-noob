<?php
// Pengulangan
// for
// while
// do.. while
// foreach : pengulangan khusus array

echo "Ini gunain for" . "<br>";
for( $i=0; $i<5; $i++) {
    echo "Hello, World!" . "<br>";
}

echo "<br>";
echo "Ini gunain while" . "<br>";
$i = 10;
while( $i<5 ) {
    echo "Hello, World! <br>";
    $i++;
}

echo "<br>";
echo "Ini gunain do-while" . "<br>";
$i = 10;
do {
    echo "Hello, World! <br>";
} while( $i<5 );
?>
