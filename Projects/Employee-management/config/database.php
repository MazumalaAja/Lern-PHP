<?php

$host = "localhost";
$dbname = "employee_management";
$username = "root";
$password = "mazumala21";

try {
     // Membuat koneksi dengan database...
     $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
     // Intinya ini untuk mengambil error jika ada kesalahan koneksi
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     die("Koneksi database gagal : " . $e->getMessage());
}
