<?php
include "logic.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>To-Do-List</title>
     <link rel="stylesheet" href="app.css">
</head>

<body>
     <div class="container">
          <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
               <h3>To-Do-List</h3>
               <input class="input" name="name" placeholder="Add username..." type="text">
               <input class="input" name="task" placeholder="Add task..." type="text">
               <button name="btn" class="btn">Add Task</button>
          </form>
     </div>
     <ul class="list-data">
          <?php foreach ($_SESSION["task"] as $key => $value) : ?>
               <li>
                    <span>Username : <?= $value["name"] ?></span>
                    <span>Hobi : <?= $value["task"] ?></span>
                    <a href="index.php?remove=<?= $key ?>" name="btn-remove" class="btn-remove">Remove</a>
               </li>
          <?php endforeach; ?>
     </ul>
</body>

</html>