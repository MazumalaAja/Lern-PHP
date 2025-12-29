<?php

$host = "localhost";
$username = "root";
$dbname = "simple_online_shop";
$password = "mazumala21";

try {
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     die("Database connection failed : " . $e->getMessage());
}
