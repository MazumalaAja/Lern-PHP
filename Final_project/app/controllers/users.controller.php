<?php
require_once  "./app/models/users.model.php";

class UserController
{
     public function index()
     {
          $data = Users::all();
          include __DIR__ . "/../views/pages/dashboard.php";
     }

     public function register()
     {
          $username = $_POST["username"] ?? null;
          $email = $_POST["email"] ?? null;
          $password = $_POST["password"] ?? null;
          $password_confirmation = $_POST["password_confirmation"] ?? null;
          if (empty($username) || empty($email) || empty($password) || empty($password_confirmation)) return throw new Exception("Semua kolom wajib diisi");
          if ($password !== $password_confirmation) return throw new Exception("Konfirmasi password tidak sesuai");
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return throw new Exception("Email tidak valid");
          Users::create($username, $email, $password);
          header("Location: ../web.php");
          exit;
     }
}
