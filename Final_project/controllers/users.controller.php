<?php

// Model users...
include __DIR__  . "/../models/users.model.php";

class UsersController
{
     public function index()
     {
          $users = Users::getAll();
          include __DIR__ . "/../views/dashboard.php";
     }
}
