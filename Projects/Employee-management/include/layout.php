<?php
require_once "../config/database.php";

// Get data from database
$database = $pdo->prepare("SELECT * FROM employees");
$database->execute();

// query functions...
function querySet($query, $datas = [])
{
     global $pdo;
     $dataset = $pdo->prepare($query);
     $dataset->execute($datas);
}

// if button add clicked...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST["username"]) && isset($_POST["address"]) && isset($_POST["salary"])) {
          $username = $_POST["username"];
          $address = $_POST["address"];
          $salary = $_POST["salary"];
          querySet("INSERT INTO employees (username,address,salary) VALUES (:username,:address,:salary)", ['username' => $username, 'address' => $address, 'salary' => $salary]);
          header("Location: " . $_SERVER["PHP_SELF"]);
          exit;
     }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-secondary p-3">
     <?php include "./header.php";  ?>
     <div class="container-lg d-flex flex-column gap-3">
          <button class="btn btn-primary" style="width: max-content;" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Employee</button>
          <?php include "./modal.php"; ?>
          <div class="bg-white rounded-3 shadow-sm p-3">
               <table class="table">
                    <thead>
                         <tr>
                              <th>No.</th>
                              <th>Username</th>
                              <th>Address</th>
                              <th>Salary</th>
                              <th>Actions</th>
                         </tr>
                    </thead>
                    <tbody>
                         <?php foreach ($database as $data): ?>
                              <tr>
                                   <td><?= $data["id"] ?></td>
                                   <td><?= $data["username"] ?></td>
                                   <td><?= $data["address"] ?></td>
                                   <td>Rp <?= number_format($data["salary"], 0, ",", ".") ?></td>
                                   <td>
                                        <button class="btn btn-success">Edit</button>
                                        <button class="btn btn-danger">Deleete</button>
                                   </td>
                              </tr>
                         <?php endforeach; ?>
                    </tbody>
               </table>
          </div>
     </div>

     <?php include "./footer.php" ?>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>