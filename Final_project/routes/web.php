<?php

// Koneksi database...
require_once __DIR__ . "/../db/config.php";

// Controllers...
require_once __DIR__ . "/../controllers/users.controller.php";

$action = $_GET["action"] ?? null;

switch ($action) {
     case "hahaha":
          break;
     default:
          $controller = new UsersController();
          $controller->index();
          break;
}
