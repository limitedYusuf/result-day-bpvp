<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>

   <style>
      * {
         padding: 0;
         margin: 0;
         /* box-sizing: border-box; */
      }

      table {
         position: absolute;
         top: 50%;
         left: 50%;
         transform: translate(-50%, -50%);
      }


      table tr td {
         padding: 30px;
      }
   </style>
</head>

<body>
   <div class="test">
      <table border="1" cellspacing="0">
         <tbody>
            <?php for ($i = 1; $i < 5; $i++) { ?>
               <tr>
                  <?php for ($j = 1; $j < 9; $j++) { ?>
                     <td><?= $i . '.' . $j ?></td>
                  <?php } ?>
               </tr>
            <?php } ?>
         </tbody>
      </table>
   </div>
</body>

</html>