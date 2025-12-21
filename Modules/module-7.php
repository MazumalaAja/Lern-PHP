<?php

// Form Handling
// $_POST & $_GET

// $_POST : Merupakan global variable yang mengandung hasil inputan user yang ada di http body
// $_GET : Merupakan global variable yang mengandung hasil inputan user yang berupa query string
// Untuk memahami kedua variable tadi kita perlukan inputan user 
$name = null;
$email = null;
$error = null
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>

<body>
     <!-- <div style="position: fixed; top:0; bottom:0;left:0; right:0; background-color: salmon; display: flex; justify-content: center; align-items: center;">Anda Telah Diretas</div> -->
     <?php
     if (empty($_POST["name"]) || empty($_POST["email"])) {
          $error = "<br>Email atau nama tidak boleh kosong";
     } else {
          // htmlspecialchars digunakan agar kode html tidak bisa berjalan dalam form
          $name = htmlspecialchars($_POST["name"]);
          $email = htmlspecialchars($_POST["email"]);
     }
     ?>

     <form action="module-7.php" method="post">
          <h3>Input Text dengan method GET</h3>
          <input type="text" name="name" placeholder="name">
          <input type="email" name="email" placeholder="email">
          <button>Kirim</button>
     </form>
     <h3><?= $error ?></h3>

     <div>
          <h3><?= $name ?></h3>
          <h3><?= $email ?></h3>
     </div>
</body>

</html>