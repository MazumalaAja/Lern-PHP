<?php

// Conditional statement
// if  , else , else if
// if() akan menjalankan blok kode klo kondisinya true
// else akan menjalan kan kode jika if nya false jadi kode else harus selalu bersama dengan if
// else if() optional jika anda ingin memberikan banyak kondisi
$value = 89;

// Penggunaan if
if ($value > 70) {
     echo "Kamu lulus";
     echo "<br>";
}

// Penggunaan else
if ($value > 90) {
     echo "Kamu lulus";
     echo "<br>";
} else {
     echo "Kamu tidak lulus";
     echo "<br>";
}

// Penggunaan else if
if ($value == 90) {
     echo "Nilai kamu 90";
     echo "<br>";
} else if ($value == 89) {
     echo "Nilai kamu 89";
     echo "<br>";
} else {
     echo "Nilai kamu bukan 90 ataupun 89";
     echo "<br>";
}

// Switch()
// Sama seperti if else tapi lebih sederhana dan susah jika anda ingin membuat kondisi yang kompleks
$color = "merah";

switch ($color) {
     case "hijau":
          echo "Warna kamu hiau";
          break;
     case "biru":
          echo "Warna kamu biru";
          break;
     case "merah":
          echo "Warna kamu merah";
          break;
}
