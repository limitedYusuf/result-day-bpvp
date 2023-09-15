<?php
function triangleSesat($size)
{
   for ($i = 1; $i <= $size; $i++) {
      for ($s = 1; $s <= $size - $i; $s++) {
         echo "&nbsp;&nbsp;";
      }
      for ($c = 1; $c <= (2 * $i) - 1; $c++) {
         echo "*";
      }

      echo "<br>";
   }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Segitiga</title>
   <style>
      * {
         margin: 0;
         padding: 0;
      }

      .wrap {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
         border: 2px dotted limegreen;
         padding: 5px;
      }
   </style>
</head>

<body>
   <div class="wrap">
      <div class="data">
         <?= triangleSesat(25) ?>
      </div>
   </div>
</body>

</html>