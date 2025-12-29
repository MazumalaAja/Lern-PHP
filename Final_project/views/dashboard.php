<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Dashboard</title>

     <!-- css link -->
     <link rel="stylesheet" href="../styles/app.css">

     <!-- Bootstarp CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

     <!-- Boostrap Icons -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark p-3">
     <!-- Modal Add Data -->
     <?php include __DIR__ . "/../components/modal-create.php" ?>

     <!-- Modal Update -->
     <?php foreach ($users as $index => $data): ?>
          <?php include __DIR__ . "/../components/modal-update.php" ?>
     <?php endforeach; ?>
     <h3 class="text-center text-light">Users Management</h3>
     <div class="container bg-white p-3 rounded-3 shadow-sm m-3 mx-auto">
          <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-create">Add User</button>
          <table class="table">
               <thead>
                    <tr>
                         <th>#</th>
                         <th>Username</th>
                         <th>Email</th>
                         <th>Role</th>
                         <th>Action</th>
                    </tr>
               </thead>
               <tbody>
                    <?php foreach ($users as $index => $data): ?>
                         <tr>
                              <td><?= $index + 1 ?></td>
                              <td><?= $data["username"] ?></td>
                              <td><?= $data["email"] ?></td>
                              <td><?= $data["role"] ?></td>
                              <td>
                                   <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modal-update<?= $index ?>">Edit</button>
                                   <button class="btn btn-danger">Delete</button>
                              </td>
                         </tr>
                    <?php endforeach; ?>
               </tbody>
          </table>
     </div>

     <!-- Bootstarp CDN -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>