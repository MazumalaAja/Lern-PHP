<?php
// Cookie
// Cookie adalah merupakan file kecil  yang menyimpan data yang dikirim  dari suatu file , data tersebut mempunya masa atau expire dan bisa di set sesuka hati
// cara membuat cookie menggunakan setcookie("Nama cookie" , "value cookie , expire(menggunakan fungsi time()) , "path")

setcookie("USER_ID", "098rtytt9890983", time() + 3600, "/");

// cara akses cookie dengan menggunakan $_COOKIE["nama cookie"]
if (isset($_COOKIE["USER_ID"])) {
     echo $_COOKIE["USER_ID"];
} else {
     echo "COOKIE tidak ditemukan";
}

// Cara hapus cookie dengan memberikan waktu sebelum sekarang
// setcookie("USER_ID", "098rtytt9890983", time() - 1, "/");
