<?php
$val = false;
$val2 = false;

$nama = true;
$nilai = true;
if (isset($_GET['send'])) {
   $nama = $_GET['nama'];
   $umur = $_GET['umur'];
   $skill = $_GET['skill'];
   $nilai = $_GET['nilai'];

   if (strlen($nama) > 200) {
      $val = true;
   }
   if ($nilai > 100) {
      $val2 = true;
   }
}

function gradeCheck($score)
{
   if ($score > 100) {
      return 'offsett! error';
   } elseif ($score >= 80 && $score <= 100) {
      return 'A';
   } elseif ($score > 70) {
      return 'B';
   } elseif ($score > 60) {
      return 'C';
   } elseif ($score > 50) {
      return 'D';
   } else {
      return 'E';
   }
}

function checkLulus($score)
{
   if ($score >= 80 && $score <= 100) {
      return 'Lulus';
   } else {
      return 'Tidak Lulus';
   }
}
?>
<!DOCTYPE html>
<html lang="en">

   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
   </head>

   <body>
      <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
         <?php
      if (isset($_GET['send'])) {
      ?>
         <?php if ($val == false && $val2 == false) { ?>
         <table border="1" width="100%" border="0" cellpadding="10" cellspacing="0">

            <?php if (strlen($nama) > 200) { ?>
            <tr class="mess">
               <td colspan="2">-- Nama siapa yang sepanjang itu wkwkwkk, max 200 aja dek dek range(1-200 huruf) --</td>
            </tr>
            <?php } else { ?>
            <tr>
               <td>Nama</td>
               <td><?= $nama ?></td>
            </tr>
            <?php } ?>
            <tr>
               <td>Umur</td>
               <td><?= $umur ?></td>
            </tr>
            <tr>
               <td>Skill</td>
               <td><?= $skill ?></td>
            </tr>
            <?php if ($nilai > 100) { ?>
            <tr class="mess">
               <td colspan="2">-- Nilai tidak boleh lebih dari 100,,, memang nya ini jaman pak hitler masih aktif? range
                  (0-100) --
               </td>
            </tr>
            <?php } else { ?>
            <tr>
               <td>Nilai</td>
               <td><?= $nilai ?></td>
            </tr>
            <?php } ?>
            <tr>
               <td>Status</td>
               <td><?= checkLulus($nilai) . ' (' . gradeCheck($nilai) . ')' ?></td>
            </tr>
         </table>
         <?php } ?>
         <?php } ?>
         <table width="100%" border="0" cellpadding="8">
            <tr>
               <td colspan="2">
                  <h2 align="center">Input Nilai</h2>
               </td>
            </tr>
            <tr>
               <td><label for="">Nama<sup>*</sup></label></td>
               <td>
                  <input type="text" required name="nama" value="<?= isset($_GET['nama']) ? $_GET['nama'] : '' ?>"
                     maxlength="300" id="">
                  <?php if (strlen($nama) > 200) { ?>
                  <br>
                  <div class="alert">Jumlah huruf yang diterima hanya kisaran 1 s/d 200</div>
                  <?php } ?>
               </td>
            </tr>
            <tr>
               <td><label for="">Umur<sup>*</sup></label></td>
               <td><input type="number" required name="umur" min="0" max="150" id=""></td>
            </tr>
            <tr>
               <td><label for="">Skill<sup>*</sup></label></td>
               <td><select name="skill" id="">
                     <option value="">-- Pilih Skill --</option>
                     <option value="HTML">HTML</option>
                     <option value="CSS">CSS</option>
                     <option value="PHP">PHP</option>
                  </select></td>
            </tr>
            <tr>
               <td><label for="">Nilai<sup>*</sup></label></td>
               <td>
                  <input type="number" required name="nilai" min="0" max="200" id="">
                  <?php if ($nilai > 100) { ?>
                  <br>
                  <div class="alert">Hanya menerima input dari 0 s/d 100</div>
                  <?php } ?>
               </td>
            </tr>
            <tr>
               <td colspan="2"><button class="alt" type="submit" name="send">KIRIM</button></td>
            </tr>
         </table>
      </form>
   </body>

</html>