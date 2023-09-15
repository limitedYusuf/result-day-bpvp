<?php

$arr = [6, 5, 8, 3, 4, 1];

$siswa = [
   'Ade Putra Sondakh',
   'Agata Tadhea Artiko',
   'Anugerah Puang Tenri Sumpala',
   'Deswynta Putri Abelia',
   'Dewi Ramadani',
   'Gregorius Agung',
   'Muhammad Dwi Reza',
   'Yusuf',
   'Puput Rahmawati',
   'Rahmat Nur Rahman',
   'Rino Pangestu',
   'Risky Gusti Ageng',
   'Risma Sihombing',
   'Syafiq Muhammad Kahfi',
   'Widya Ayu Wahyuni'
];

foreach ($siswa as $key => $s) {
   echo "Nama Siswa : <b>" . strtoupper($s) . "</b><hr>";
}

$gacor = [16, 52, 68, 77, 90];
$resultGacor = '';

foreach ($gacor as $key => $nomor) {
   echo "Angka Gacor Awal : $nomor <br>";
   $endRes = $nomor * 6;
   echo "Angka Gacor Akhir : <b>$endRes</b>";
   echo "<hr>";
   $resultGacor .= $endRes;
}
echo "Angka Gacor yang diberikan nenek adalah <b>$resultGacor</b>. Silahkan pasang bet!";

echo "<hr>";
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
      return "Muda (Bocil)";
   } else if ($age >= 21 && $age <= 30) {
      return "Dewasa";
   } else if ($age >= 31 && $age <= 100) {
      return "Lansia";
   } else {
      return "Entitas Lain..!";
   }
}

$skorSiswa = [
   ['nama' => 'Ade Putra Sondakh', 'skill' => 'HTML + CSS + PHP', 'nilai' => 88, 'age' => 25],
   ['nama' => 'Agata Tadhea Artiko', 'skill' => 'HTML + CSS + PHP', 'nilai' => 70, 'age' => 19],
   ['nama' => 'Andhika Pratama', 'skill' => 'HTML + CSS + PHP', 'nilai' => 70, 'age' => 23],
   ['nama' => 'Anugerah Puang Tenri Sumpala', 'skill' => 'HTML + CSS + PHP', 'nilai' => 65, 'age' => 20],
   ['nama' => 'Deswynta Putri Abelia', 'skill' => 'HTML + CSS + PHP', 'nilai' => 90, 'age' => 20],
   ['nama' => 'Dewi Ramadani', 'skill' => 'HTML + CSS + PHP', 'nilai' => 84, 'age' => 20],
   ['nama' => 'Gregorius Agung', 'skill' => 'HTML + CSS + PHP', 'nilai' => 56, 'age' => 20],
   ['nama' => 'Muhammad Dwi Reza', 'skill' => 'HTML + CSS + PHP', 'nilai' => 100, 'age' => 19],
   ['nama' => 'Yusuf', 'skill' => 'HTML + CSS + PHP', 'nilai' => 95, 'age' => 21],
   ['nama' => 'Puput Rahmawati', 'skill' => 'HTML + CSS + PHP', 'nilai' => 88, 'age' => 27],
   ['nama' => 'Rahmat Nur Rahman', 'skill' => 'HTML + CSS + PHP', 'nilai' => 73, 'age' => 18],
   ['nama' => 'Rino Pangestu', 'skill' => 'HTML + CSS + PHP', 'nilai' => 85, 'age' => 27],
   ['nama' => 'Risky Gusti Ageng', 'skill' => 'HTML + CSS + PHP', 'nilai' => 99, 'age' => 20],
   ['nama' => 'Risma Sihombing', 'skill' => 'HTML + CSS + PHP', 'nilai' => 81, 'age' => 18],
   ['nama' => 'Syafiq Muhammad Kahfi', 'skill' => 'HTML + CSS + PHP', 'nilai' => 100, 'age' => 20],
   ['nama' => 'Widya Ayu Wahyuni', 'skill' => 'HTML + CSS + PHP', 'nilai' => 100, 'age' => 22]
];

foreach ($skorSiswa as $key => $item) {
   echo $item['nama'] . "<br>";
}
