<?php
function generateMath($del, $f = 11)
{
   switch ($del) {
      case '+':
         for ($i = 1; $i <= 10; $i++) {
            echo "<p>$i $del " . ($f - $i) . "  = " . ($i + ($f - $i)) . "</p>";
         }
         break;
      case '*':
         for ($i = 1; $i <= 10; $i++) {
            echo "<p>$i x " . ($f - $i) . "  = " . ($i * ($f - $i)) . "</p>";
         }
         break;
      case '-':
         for ($i = 1; $i <= 10; $i++) {
            echo "<p>$i $del " . ($f - $i) . "  = " . ($i - ($f - $i)) . "</p>";
         }
         break;
      case '/':
         for ($i = 1; $i <= 10; $i++) {
            echo "<p>$i $del " . ($f - $i) . "  = " . number_format(($i / ($f - $i)), 2, '.', '.') . "</p>";
         }
         break;
      case '%':
         for ($i = 1; $i <= 10; $i++) {
            echo "<p>$i $del " . ($f - $i) . "  = " . ($i % ($f - $i)) . "</p>";
         }
         break;

      default:
         # code...
         break;
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Contoh Perulangan</title>
   <style>
      div {
         padding: 0;
         margin: 0;
      }

      .calc {
         display: flex;
         justify-content: center;
      }

      .content {
         margin-right: 20px;
         border: 3px dashed lawngreen;
         padding: 10px;
         min-width: 200px;
      }

      .calc h2 {
         text-align: center;
      }

      .calc hr {
         border: 3px dotted red !important;
      }
   </style>
</head>

<body>
   <?php
   $i = 1;
   while ($i <= 6) {
   ?>
      <h<?= $i ?>>Aku suka riski ke <?= $i ?></h<?= $i ?>>
   <?php
      $i++;
   }
   ?>
   <hr>
   <div>
      <select name="" id="">
         <option value="">-- Pilih Tanggal --</option>
         <?php
         $start = 1;
         while ($start <= 31) {
         ?>
            <option value="<?= $start; ?>"><?= $start; ?></option>
         <?php
            $start++;
         }
         ?>
      </select>
      <select name="" id="">
         <option value="">-- Pilih Bulan --</option>
         <?php
         $start = 1;
         while ($start <= 12) {
         ?>
            <option value="<?= $start; ?>"><?= $start; ?></option>
         <?php
            $start++;
         }
         ?>
      </select>
      <select name="" id="">
         <option value="">-- Pilih Tahun --</option>
         <?php
         $start = date('Y');
         while ($start >= 1970) {
         ?>
            <option value="<?= $start; ?>"><?= $start; ?></option>
         <?php
            $start--;
         }
         ?>
      </select>
   </div>
   <hr>
   <!-- calendar loop -->
   <div class="calc">
      <div class="content">
         <h2>Penjumlahan</h2>
         <hr>
         <?= generateMath('+') ?>
      </div>
      <div class="content">
         <h2>Perkalian</h2>
         <hr>
         <?= generateMath('*') ?>
      </div>
      <div class="content">
         <h2>Pengurangan</h2>
         <hr>
         <?= generateMath('-') ?>
      </div>
      <div class="content">
         <h2>Pembagian</h2>
         <hr>
         <?= generateMath('/') ?>
      </div>
      <div class="content">
         <h2>Modulus (Sisa Bagi)</h2>
         <hr>
         <?= generateMath('%') ?>
      </div>
   </div>
</body>

</html>