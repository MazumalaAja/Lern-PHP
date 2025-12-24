<?php
session_start();

isset($_SESSION["task"]) ? null : $_SESSION["task"] = [];

function addData($name, $task)
{
     $_SESSION["task"][] = [
          "name" => $name,
          "task" => $task,
     ];
}

if (isset($_POST["btn"])) {
     if (isset($_POST["name"]) && isset($_POST["task"])) {
          if (trim($_POST["name"]) == "" || trim($_POST["task"]) == "") {
               return null;
          } else {
               addData(htmlspecialchars($_POST["name"]), htmlspecialchars($_POST["task"]));
          }
     }
     header("location:" . $_SERVER["PHP_SELF"]);
     exit();
} elseif (isset($_GET["remove"])) {
     $id = $_GET["remove"];
     unset($_SESSION["task"][$id]);
     header("location:" . $_SERVER["PHP_SELF"]);
     exit();
} else {
     return null;
}
