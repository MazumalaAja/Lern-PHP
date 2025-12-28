<?php
// Koneksi ke database...
require_once "./config/database.php";

// for ($i = 1; $i <= 100; $i++) {
//      $database3 = $pdo->prepare("INSERT INTO users (username,email,password) VALUES (:username,:email,:password)");
//      $database3->execute(["username" => "Username ke-$i", "email" => "email$i@gamil.com", "password" => "password ke-$i"]);
// }

// Controller...
require_once "./app/controllers/users.controller.php";

$controller = new UserController();
$action = $_GET["action"] ?? "";

switch ($action) {
     case 'register':
          $controller->register();
          break;
     default:
          $controller->index();
          break;
}
