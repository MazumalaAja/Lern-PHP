<?php
$result = 0;
$error = "";


function calculator($num1, $num2, $c)
{
     $a = htmlspecialchars(floatval($num1));
     $b = htmlspecialchars(floatval($num2));
     switch ($c) {
          case "-":
               $result =  $a - $b;
               break;
          case "+":
               $result =  $a + $b;
               break;
          case "*":
               $result =  $a * $b;
               break;
          case "/":
               $result =  $a / $b;
               break;
     }
     return $result;
}

// Gunakan isset dari pada empty karena empty akan menjadikan false klo ada falsy ["" , 0 , 0.0 , [] , false , null]
if (!isset($_POST["first-number"]) || !isset($_POST["second-number"])) {
     $error = "Masukkan value";
} else if ($_POST["first-number"] == "" || $_POST["second-number"] == "") {
     $error = "Masukkan value";
} else {
     $result = calculator($_POST["first-number"], $_POST["second-number"], $_POST["operator"]);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link rel="stylesheet" href="app.css">
</head>

<body>
     <div class="container">
          <h1>Simple Calculator</h1>
          <form action="" method="post">
               <div class="input-group">
                    <input type="number" class="first-number" name="first-number">
                    <input type="number" class="second-number" name="second-number">
               </div>
               <div><?= $error; ?></div>
               <div class="action">
                    <select name="operator">
                         <option value="-">-</option>
                         <option value="+">+</option>
                         <option value="*">&#xd7;</option>
                         <option value="/">&#xf7;</option>
                    </select>
                    <button class="btn">=</button>
               </div>
          </form>

          <div class="result"><?= $result; ?></div>
     </div>
</body>

</html>