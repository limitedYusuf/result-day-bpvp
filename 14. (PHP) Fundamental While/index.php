<?php

$i = 1;
while ($i <= 10) {
   echo "baris $i<br>";
   $i++;
}

echo "<hr>";
$i = 10;
while ($i >= 1) {
   echo "baris $i<br>";
   $i--;
}

echo "<hr>";
$i = 1;
while ($i <= 10) {
   if ($i != 5) {
      echo $i;
      echo "<br>";
   }
   $i++;
}

echo "<hr>";
$i = 0;
while ($i <= 10) {
   if ($i % 2 == 0) {
      echo "$i";
      if ($i < 10) {
         echo ", ";
      }
   }
   $i++;
}

echo "<hr>";
$i = 10;
while ($i > 0) {
   if ($i == 1) {
      echo "Anak ayam turun 1, mati 1 tinggal induk nya<br>";
   } else {
      echo "Anak ayam turun $i, mati 1 tinggal " . ($i - 1) . " <br>";
   }
   $i--;
}

echo "<hr>";
$i = 0;
while ($i <= 100) {
   echo "Huruf $i<br>";

   $i += 10; //$i = $i + 10;
}
