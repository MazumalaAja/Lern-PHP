<?php

// Mengkoneksikan dengan database saya menggunakan MYSQL...
$host = "localhost";
$username = "root";
$password = "mazumala21";
$dbname = "simple_online_shop";

try {
     $pdo = new PDO("mysql:$host;dbname:$dbname", $username, $password);
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     echo ("Koneksi database berhasil");
} catch (PDOException $e) {
     die("Koneksi database gagal : " . $e->getMessage());
}
