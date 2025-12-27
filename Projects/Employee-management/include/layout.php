<?php
require_once "../config/database.php";

// Get data from database
$database = $pdo->prepare("SELECT * FROM employees");
$database->execute();
$employees = $database->fetchAll(PDO::FETCH_ASSOC);

// query functions...
function querySet($query, $datas = [])
{
     global $pdo;
     $dataset = $pdo->prepare($query);
     $dataset->execute($datas);
}

// if button add clicked...
if ($_SERVER["REQUEST_METHOD"] == "POST") {
     if (isset($_POST["add"])) {
          $username = $_POST["username"];
          $address = $_POST["address"];
          $salary = $_POST["salary"];
          querySet("INSERT INTO employees (username,address,salary) VALUES (:username,:address,:salary)", ['username' => $username, 'address' => $address, 'salary' => $salary]);
          header("Location: " . $_SERVER["PHP_SELF"]);
          exit;
     } elseif (isset($_POST["update"])) {
          $id = $_POST["id"];
          $username = $_POST["username"];
          $address = $_POST["address"];
          $salary = $_POST["salary"];
          querySet("UPDATE  employees SET username = :username , address= :address , salary = :salary WHERE id = :id", ['id' => $id, 'username' => $username, 'address' => $address, 'salary' => $salary]);
          header("Location: " . $_SERVER["PHP_SELF"]);
          exit;
     } elseif (isset($_POST["remove"])) {
          $id = $_POST["id"];
          querySet("DELETE FROM employees WHERE id = :id", ['id' => $id]);
          header("Location: " . $_SERVER["PHP_SELF"]);
          exit;
     } else {
          return null;
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
               <?php foreach ($employees as $data): ?>
                    <!-- Modal -->
                    <div class="modal fade" id="editModal<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog modal-lg bg-white rounded-3">
                              <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="modal-content">
                                   <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                   <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Update</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                   </div>
                                   <div class="modal-body">
                                        <div>
                                             <div class="mb-3">
                                                  <label class="form-label" for="username">Username</label>
                                                  <input value="<?= $data["username"] ?>" name="username" id="username" type="text" class="form-control" placeholder="Enter employee's name..." required>
                                             </div>
                                             <div class="mb-3">
                                                  <label class="form-label" for="address">Address</label>
                                                  <input value="<?= $data["address"] ?>" name="address" id="address" type="text" class="form-control" placeholder="Enter employee's address..." required>
                                             </div>
                                             <div class="mb-3">
                                                  <label class="form-label" for="salary">Salary</label>
                                                  <input value="<?= $data["salary"] ?>" name="salary" id="salary" type="number" class="form-control" placeholder="Enter employee's salary..." required>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button name="update" type="submit" class="btn btn-primary">Save changes</button>
                                   </div>
                              </form>
                         </div>
                    </div>
               <?php endforeach; ?>
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
                         <?php foreach ($employees as $data): ?>
                              <tr>
                                   <td><?= $data["id"] ?></td>
                                   <td><?= $data["username"] ?></td>
                                   <td><?= $data["address"] ?></td>
                                   <td>Rp <?= number_format($data["salary"], 0, ",", ".") ?></td>
                                   <td class="d-flex gap-3 align-items-center">
                                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $data['id']; ?>">Edit</button>
                                        <form method="post" action="<?= $_SERVER["PHP_SELF"] ?>">
                                             <input name="id" type="hidden" value="<?= $data['id'] ?>">
                                             <button type="submit" name="remove" class="btn btn-danger">Delete</button>
                                        </form>
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