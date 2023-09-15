<?php

$setStatus = false;
if (isset($_POST['send'])) {
   $setUser = 'admin';
   $setPass = '123';
   // get from form
   $username = $_POST['username'];
   $password = $_POST['password'];

   // check manual only
   if (($username == $setUser) && ($password == $setPass)) {
      $setStatus = true;
   } else {
      // not same
      $setStatus = false;
   }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>
</head>

<body>
   <div class="container">
      <div class="card">
         <h2>Ninu ninu,, Login dulu</h2>
         <?php if ($setStatus && isset($_POST['send'])) { ?>
            <div class="success">Autentikasi Berhasil... Yeeeyyyy :*</div>
         <?php } elseif ($setStatus == false && isset($_POST['send'])) { ?>
            <div class="alert">Autentikasi Gagal... minimal jgn jd hacker :*</div>
         <?php } ?>
         <div class="space"></div>
         <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <label for="username">Username</label>
            <input type="text" value="" required autocomplete="off" name="username" id="username" placeholder="Username nya apa?">
            <div class="space"></div>
            <label for="password">Password</label>
            <input type="password" name="password" value="" required autocomplete="off" id="password" placeholder="Password antum...">

            <button type="submit" name="send">Login</button>
         </form>
      </div>

   </div>
</body>

</html>