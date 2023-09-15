<?php

   $nilai = 70;
   if ($nilai > 80) {
      echo 'ok';
   } elseif ($nilai >= 70 && $nilai <= 80) {
      echo 'boleh';
   } else {
      echo 'no';
   }
   echo "<hr>";
   $password = 12345;
   if ($password == 12345) {
      echo "echo granted";
   } else {
      echo "echo declined";
   }
   echo "<hr>";
   $x = 80;
   $y = $x % 2;
   if ($y == 0) {
      echo 'genap';
   } else {
      echo 'ganjil';
   }
   echo "<hr>";
   $a = 90;
   $b = 70;
   if ($a > $b) {
      echo 'nilai a lebih tinggi dari b';
   } else {
      echo 'nilai a tidak lebih tinggi dari b';
   }
   echo "<hr>";
   if ($a == $b) {
      echo 'nilai a sama dari b';
   } else {
      echo 'nilai a tidak sama dari b';
   }
   echo "<hr>";
   if ($a < $b) {
      echo 'nilai a lebih rendah dari b';
   } else {
      echo 'nilai a tidak lebih rendah dari b';
   }
   echo "<hr>";
   $a = 80;
   $b = 75;
   $c = 85;
   $d = ($a + $b + $c) / 3;
   if ($d > 80) {
      echo "zehahaha lulus, nilai mu $d";
   } else {
      echo "zehahaha gagal lulus, cari pak jo sana";
   }
   echo "<hr>";
   // kondisi if bersarang
   $e = 105;
   if ($e > 100) {
      echo 'offsett! error';
   } elseif ($e >= 80 && $e <= 100) {
      echo 'nilaimu A';
   } elseif ($e > 70) {
      echo 'nilaimu B';
   } elseif ($e > 60) {
      echo 'nilaimu C';
   } elseif ($e > 50) {
      echo 'nilaimu D';
   } else {
      echo 'nilaimu E';
   }
   echo "<hr>";
   // count umur
   $umur = 101;
   if ($umur >= 0 && $umur < 5) {
      echo 'tahap balita';
   } elseif ($umur >= 5 && $umur <= 12) {
      echo 'tahap anak';
   } elseif ($umur >= 13 && $umur <= 18) {
      echo 'tahap remaja';
   } elseif ($umur >= 19 && $umur <= 60) {
      echo 'tahap dewasa';
   } elseif ($umur >= 60 && $umur <= 150) {
      echo 'tahap lansia';
   } else {
      echo 'offset!';
   }
   echo "<hr>";
   // ternary
   echo ($umur > 50) ? 'tua' : 'bocil';
   echo "<hr>";
   // switch
   $day = 1;
   switch ($day) {
      case 1:
         echo 'Senin';
         break;
      case 2:
         echo 'Selasa';
         break;
      case 3:
         echo 'Rabu';
         break;
      case 4:
         echo 'Kamis';
         break;
      case 5:
         echo 'Jumat';
         break;
      case 6:
         echo 'Sabtu';
         break;
      case 7:
         echo 'Minggu';
         break;
      default:
         echo 'Offset';
         break;
   }
   echo "<hr>";
   // count umur
   $umur = 0;
   switch (true) {
      case ($umur >= 0 && $umur < 5):
         echo 'Bocil';
         break;
      case ($umur >= 5 && $umur <= 12):
         echo 'Anak Bebal';
         break;
      case ($umur >= 13 && $umur <= 18):
         echo 'Remaja';
         break;
      case ($umur >= 19 && $umur <= 60):
         echo 'Dewasa';
         break;
      case ($umur >= 60 && $umur <= 150):
         echo 'Lansia';
         break;
      default:
         echo 'Offset';
         break;
   }
