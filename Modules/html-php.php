<?php

// Membuat variable
$title = "Belejar PHP untuk pemula";
$info = "Kita akan belajar PHP sampai jadi ahli 😊";

?>

<!-- Meletakan halaman html jadi html dan php bisa digabungkan -->
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Belajar php</title>
</head>

<body>
     <!-- Meletakan sintax php di html -->
     <h1><?php echo $title  ?></h1>

     <!-- ini sama saja dengan echo -->
     <p><?= $info ?></p>
</body>

</html>