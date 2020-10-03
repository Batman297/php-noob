<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];


var_dump($hari);
echo "<br>";
print_r($hari);
echo "<br>";

//menampilan 1 elemen pada array
// echo $hari[0];
// echo "<br>";

// menambahkan elemen baru pada array
print_r($hari);
$hari[] = "Kamis";
echo "<br>";
print_r($hari);
?>
