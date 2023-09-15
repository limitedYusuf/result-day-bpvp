<?php
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

function ageCheck($age)
{
   if ($age >= 15 && $age <= 20) {
      return "Bocil";
   } else if ($age >= 21 && $age <= 30) {
      return "Dewasa";
   } else if ($age >= 31 && $age <= 100) {
      return "Lansia";
   } else {
      return "Entitas Lain..!";
   }
}

$skorSiswa = [
   ['nama' => 'Ade Putra Sondakh', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 88, 'age' => 25],
   ['nama' => 'Agata Tadhea Artiko', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 70, 'age' => 19],
   ['nama' => 'Andhika Pratama', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 70, 'age' => 23],
   ['nama' => 'Anugerah Puang Tenri Sumpala', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 65, 'age' => 20],
   ['nama' => 'Deswynta Putri Abelia', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 90, 'age' => 20],
   ['nama' => 'Dewi Ramadani', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 84, 'age' => 20],
   ['nama' => 'Gregorius Agung', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 56, 'age' => 20],
   ['nama' => 'Muhammad Dwi Reza', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 100, 'age' => 19],
   ['nama' => 'Yusuf', 'skill' => ['HTML'], 'nilai' => 95, 'age' => 21],
   ['nama' => 'Puput Rahmawati', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 88, 'age' => 117],
   ['nama' => 'Rahmat Nur Rahman', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 73, 'age' => 18],
   ['nama' => 'Rino Pangestu', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 85, 'age' => 27],
   ['nama' => 'Risky Gusti Ageng', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 99, 'age' => 20],
   ['nama' => 'Risma Sihombing', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 81, 'age' => 18],
   ['nama' => 'Syafiq Muhammad Kahfi', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 100, 'age' => 20],
   ['nama' => 'Widya Ayu Wahyuni', 'skill' => ['HTML', 'PHP', 'NODE'], 'nilai' => 100, 'age' => 22]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Siswa</title>
   <style>
      tr.jago {
         background-color: lightgreen;
      }

      tr.bagus {
         background-color: lightskyblue;
      }

      tr.nub {
         background-color: lightsalmon;
      }

      tr:hover {
         background-color: white;
         color: black;
         cursor: grab;
         font-family: 'Comic Sans MS';
      }

      ul {
         margin: 0;
         padding-inline-start: 20px;
      }
   </style>
</head>

<body>
   <center>
      <h1>Data Keseluruhan</h1>
   </center>
   <table border="1" cellpadding="10" cellspacing="0" width="100%">
      <tr>
         <th>No.</th>
         <th>Nama</th>
         <th>Umur</th>
         <th>Skill</th>
         <th>Nilai Akhir</th>
      </tr>
      <?php foreach ($skorSiswa as $key => $siswa) : ?>
         <?php if (gradeCheck($siswa['nilai']) == 'A') { ?>
            <tr class="jago">
            <?php } elseif (gradeCheck($siswa['nilai']) == 'B') { ?>
            <tr class="bagus">
            <?php } else { ?>
            <tr class="nub">
            <?php } ?>
            <td><?= ($key + 1) ?>
            </td>
            <td><?= $siswa['nama']; ?></td>
            <td><?= $siswa['age'] . ' (<b>' . ageCheck($siswa['age']) . '</b>)'; ?></td>
            <td>
               <ul>
                  <?php foreach ($siswa['skill'] as $s) { ?>
                     <li><?= $s ?></li>
                  <?php } ?>
               </ul>
            </td>
            <td><?= $siswa['nilai'] . ' (<b>' . gradeCheck($siswa['nilai']) . '</b>)'; ?></td>
            </tr>
         <?php endforeach; ?>
   </table>
</body>

</html>