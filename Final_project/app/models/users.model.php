<?php

class Users
{
     public static function all()
     {
          global $pdo;
          $sql = "SELECT * FROM users";
          $database = $pdo->prepare($sql);
          $database->execute();
          $data = $database->fetchAll(PDO::FETCH_OBJ);
          return $data;
     }

     public static function create($username, $email, $password)
     {
          global $pdo;
          $sql = "INSERT INTO users (username,email,password) VALUES (:username,:email,:password)";
          $newUser = $pdo->prepare($sql);
          $newUser->execute(["username" => $username, "email" => $email, "password" => $password]);
          return $newUser;
     }
}
