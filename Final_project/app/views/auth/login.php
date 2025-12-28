<!doctype html>
<html lang="en">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Login</title>

     <!-- Boootstrap icon -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

     <!-- Bootstrap CDN -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="d-flex align-items-center justify-content-center min-vh-100 bg-secondary">
     <div class="container-sm bg-white rounded-3 shadow-sm p-3" style="max-width: 50%;">
          <h3 class="text-center mb-3">Form Login</h3>
          <form action="" method="post">
               <div class="input-group mb-3">
                    <i class="bi bi-envelope input-group-text" id="basic-addon1"></i>
                    <input type="email" name="email" class="form-control" placeholder="Username" aria-label="Email" aria-describedby="basic-addon1" required>
               </div>
               <div class="input-group mb-3">
                    <i class="bi bi-lock input-group-text" id="basic-addon1"></i>
                    <input type="password" name="password" class="form-control" placeholder="Username" aria-label="Password" aria-describedby="basic-addon1" required>
               </div>
               <button class="btn btn-primary mb-3" style="width: 100%;" name="register">Login</button>
               <div>
                    <span class="text-center d-block fw-medium text-secondary">Belum punya akun ? <a href="register.php" class="text-decoration-none">Daftar sekarang!</a></span>
               </div>
          </form>
     </div>

     <!-- Bootstrap script CDN -->
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>