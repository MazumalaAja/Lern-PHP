<?php
// Session sama seperti cookie wadah menyimpan data tapi klo session di di server atau web server kalo cookie dia di sisi client atau web browser contoh mudah cookie seperti kartu member gym dan session seperti buku atau database data member gym , anda bebas masuk ke dalam gym tanpa harus memperkenalkan diri dan membuat admin mengecheck ke database anda cukup memperlihatkan kartu member gym anda , tapi di kartu ada masa aktif sebulan jadi anda bisa menggunakan kartu itu jika masih dalam tenggat waktu yang sesuai namun jika anda sudah habis maka kartu tidak berlaku dan anda harus memperpanjang member gym atau memperbarui data anda.

// Cara membuat session 
// session_start() : harus ada sebelum anda membuat session
// $_SESSION["key"] = value; setelah itu masukkan value ke dalam session
// anda bisa mengakses session dengan $_SESSION["key"]
// Lalu cara menghapus atau mematikan session dengan unset($_SESSION["key"]) : menghapus session tertentu / session_destroy() : menghapus semua session

session_start();
$_SESSION["USERNAME"] = "Mazumala";
$_SESSION["PASSWORD"] = "sdklfsdlfkjsdlfkjlsdkfjlsdkfjsdlfkd";

// unset($_SESSION["PASSWORD"]);

// session_destroy(); ini akan menghapus semua session di server tapi di browser data masih ada
// $_SESSION = []; ini digunakan karena walaupun diserver telah dihapus tapi di browser masih ada

if (!isset($_SESSION["PASSWORD"])) {
     echo "<br>Invalid Password";
} else {
     echo $_SESSION["PASSWORD"];
}

if (!isset($_SESSION["USERNAME"])) {
     echo "<br>Anda tidak terdaftar";
} else {
     echo "<br>" . $_SESSION["USERNAME"];
}
