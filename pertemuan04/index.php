<?php
date_default_timezone_set("Asia/Bangkok");

echo date_default_timezone_get();
echo "<br>";
echo "<br>";

echo date("l, d-M-Y");
echo "<br>";
echo "<br>";

echo "July 1, 2000 is on a " . date("l", mktime(0, 0, 0, 7, 1, 2000));
echo "<br>";
echo "<br>";

echo date(DATE_RFC2822);
echo "<br>";
echo "<br>";

echo date("l, d-M-Y", time()-60*60*24*100);
echo "<br>";
echo "<br>";

echo date("l, d-M-Y", mktime(0,0,0,9,2,1997));
echo "<br>";
echo "<br>";


?>
