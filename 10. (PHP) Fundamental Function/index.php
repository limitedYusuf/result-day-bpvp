   <?php

   function hello()
   {
      return 'hello';
   }
   echo hello();
   echo "<hr>";
   function jumlah()
   {
      $nilaia = 90;
      $nilaib = 90;
      $total  = $nilaia + $nilaib;

      return $total;
   }
   echo jumlah();
   echo "<hr>";
   function family($name)
   {
      return "$name<br>";
   }
   $p = 'Fulano';
   echo family('Suwirjo');
   echo family($p);
   echo "<hr>";
   function prosesSum($a, $b)
   {
      return $a + $b;
   }
   echo prosesSum(10, 25);
   echo "<hr>";
   // check score alpha
   function alphaScore($sum)
   {
      if ($sum > 100) {
         return 'offsett! error';
      } elseif ($sum >= 80 && $sum <= 100) {
         return 'A';
      } elseif ($sum > 70) {
         return 'B';
      } elseif ($sum > 60) {
         return 'C';
      } elseif ($sum > 50) {
         return 'D';
      } else {
         return 'E';
      }
   }
   function prosesResult($a, $b, $c)
   {
      $sum   = ($a + $b + $c) / 3;
      $grade = alphaScore($sum);

      if ($sum >= 80) {
         return "Nilai rata rata mu adalah " . number_format($sum, 2, '.', '.') . " dan kamu dinyatakan <b>LULUS</b>, Grade score mu adalah <b>$grade</b>";
      } else {
         return "Nilai rata rata mu adalah " . number_format($sum, 2, '.', '.') . " dan kamu dinyatakan <b>TIDAK LULUS</b>, Grade score mu adalah <b>$grade</b>";
      }
   }
   echo prosesResult(80, 80, 90);
   echo "<hr>";
   echo prosesResult(50, 50, 90);
   // mini calculate
   echo "<hr>";
   function miniCalculate($nilai1, $del, $nilai2)
   {
      switch ($del) {
         case '+':
            $sum = $nilai1 + $nilai2;
            return "$nilai1 + $nilai2 = " . $sum;
            break;
         case '-':
            $sum = $nilai1 - $nilai2;
            return "$nilai1 - $nilai2 = " . $sum;
            break;
         case '*':
            $sum = $nilai1 * $nilai2;
            return "$nilai1 * $nilai2 = " . $sum;
            break;
         case '/':
            $sum = $nilai1 / $nilai2;
            return "$nilai1 / $nilai2 = " . $sum;
            break;
         case '%':
            $sum = $nilai1 % $nilai2;
            return "$nilai1 % $nilai2 = " . $sum;
            break;

         default:
            return 'Upss.... Pelanggaran';
            break;
      }
   }

   echo miniCalculate(50, '+', 5) . "<hr>";
   echo miniCalculate(50, '-', 5) . "<hr>";
   echo miniCalculate(50, '*', 5) . "<hr>";
   echo miniCalculate(50, '/', 5) . "<hr>";
   echo miniCalculate(50, '%', 5) . "<hr>";
   // rainbow day
   function rainbowDay($day)
   {
      switch (str_replace(["'", ' '], ['', ''], strtolower($day))) {
         case 'senin':
            return "<div style='background-color: blue; width: 100%; padding: 10px; color: white;'><b>Senin</b></div>";
            break;
         case 'selasa':
            return "<div style='background-color: red; width: 100%; padding: 10px; color: white;'><b>Selasa</b></div>";
            break;
         case 'rabu':
            return "<div style='background-color: orange; width: 100%; padding: 10px;'><b>Rabu</b></div>";
            break;
         case 'kamis':
            return "<div style='background-color: black; width: 100%; padding: 10px; color: white;'><b>Kamis</b></div>";
            break;
         case 'jumat':
            return "<div style='background-color: lime; width: 100%; padding: 10px;'><b>Jumat</b></div>";
            break;
         case 'sabtu':
            return "<div style='background-color: white; width: 100%; padding: 10px;'><b>Sabtu</b></div>";
            break;
         case 'minggu':
            return "<div style='background-color: gray; width: 100%; padding: 10px; color: white;'><b>Minggu</b></div>";
            break;

         default:
            return 'huh, you lost?';
            break;
      }
   }
   echo rainbowDay('Senin');
   echo rainbowDay('SeLasa');
   echo rainbowDay('RaBu');
   echo rainbowDay('Kam is');
   echo rainbowDay("JuM'at");
   echo rainbowDay('SaBtu');
   echo rainbowDay('Minggu');
   echo "<hr>";
   // built in
   function convertMonth($month)
   {
      switch ($month) {
         case '01':
            return 'Januari';
            break;
         case '02':
            return 'Februari';
            break;
         case '03':
            return 'Maret';
            break;
         case '04':
            return 'April';
            break;
         case '05':
            return 'Mei';
            break;
         case '06':
            return 'Juni';
            break;
         case '07':
            return 'Juli';
            break;
         case '08':
            return 'Agustus';
            break;
         case '09':
            return 'September';
            break;
         case '10':
            return 'Oktober';
            break;
         case '11':
            return 'November';
            break;
         case '12':
            return 'Desember';
            break;

         default:
            # code...
            break;
      }
   }

   function convertDayName($day)
   {
      switch ($day) {
         case 1:
            return 'Senin';
            break;
         case 2:
            return 'Selasa';
            break;
         case 3:
            return 'Rabu';
            break;
         case 4:
            return 'Kamis';
            break;
         case 5:
            return 'Jumat';
            break;
         case 6:
            return 'Sabtu';
            break;
         case 0:
            return 'Minggu';
            break;

         default:
            # code...
            break;
      }
   }

   function customDateInd($date)
   {
      $year  = date('Y', strtotime($date));
      $month = date('m', strtotime($date));
      $day   = date('d', strtotime($date));
      $name  = date("w", strtotime($date));

      $formatMonth = convertMonth($month);
      $formatDayName = convertDayName($name);
      return "$formatDayName, $day $formatMonth $year";
   }

   $date = '2023-08-27';
   echo customDateInd(date('Y-m-d', strtotime($date)));
   echo "<hr>";
