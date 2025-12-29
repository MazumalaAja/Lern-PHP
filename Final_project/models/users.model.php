<?php

class Users
{
     public static function getAll()
     {
          global $pdo;
          $database = $pdo->prepare("SELECT * FROM users LIMIT 5");
          $database->execute();
          return $database->fetchAll(PDO::FETCH_ASSOC);
     }
}
