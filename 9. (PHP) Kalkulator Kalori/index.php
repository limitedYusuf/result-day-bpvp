<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $gender = $_POST['gender'];
   $age = $_POST['age'];
   $foods = $_POST['foods'];
   $weight = $_POST['weight'];
   $activity = $_POST['activity'];
   $height = $_POST['height'];

   function calculateCalorieNeeds($gender, $age, $foods, $weight, $activity, $height)
   {
      if ($gender === 'male') {
         $calories = (13.75 * $weight) + (5.003 * $height) - (6.75 * $age) + 66.5;
      } else {
         $calories = (9.563 * $weight) + (1.850 * $height) - (4.676 * $age) + 655.1;
      }

      if (in_array('carbohydrate', $foods)) {
         $calories += 500;
      }
      if (in_array('protein', $foods)) {
         $calories += 300;
      }
      if (in_array('fat', $foods)) {
         $calories += 200;
      }

      if ($activity === 'sedentary') {
         $calories *= 1.2;
      } elseif ($activity === 'moderate') {
         $calories *= 1.5;
      } elseif ($activity === 'active') {
         $calories *= 1.8;
      }

      return $calories;
   }

   $calorieNeeds = calculateCalorieNeeds($gender, $age, $foods, $weight, $activity, $height);

   echo "Kebutuhan kalori harian Anda adalah: " . $calorieNeeds . " kalori";
}
?>

<!DOCTYPE html>
<html>

<head>
   <title>Kalkulator Kebutuhan Kalori Harian</title>
</head>

<body>
   <h1>Kalkulator Kebutuhan Kalori Harian</h1>
   <form method="POST" action="">
      <label>Jenis Kelamin:</label>
      <input type="radio" name="gender" value="male" checked> Laki-laki
      <input type="radio" name="gender" value="female"> Perempuan
      <br><br>
      <label>Usia:</label>
      <input type="number" name="age" required>
      <br><br>
      <label>Pilih Jenis Makanan:</label>
      <input type="checkbox" name="foods[]" value="carbohydrate"> Karbohidrat
      <input type="checkbox" name="foods[]" value="protein"> Protein
      <input type="checkbox" name="foods[]" value="fat"> Lemak
      <br><br>
      <label>Berat Badan (kg):</label>
      <input type="number" name="weight" required>
      <br><br>
      <label>Tingkat Aktivitas Fisik:</label>
      <select name="activity">
         <option value="sedentary">Kurang Aktif</option>
         <option value="moderate">Aktif Sedang</option>
         <option value="active">Aktif Tinggi</option>
      </select>
      <br><br>
      <label>Tinggi Badan (cm):</label>
      <input type="number" name="height" required>
      <br><br>
      <input type="submit" value="Hitung">
   </form>
</body>

</html>