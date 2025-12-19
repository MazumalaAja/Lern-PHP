<?php

// Funtion atau fungsi adalah sesuatu yang dapat menjalankan blok kode berulang-ulang
function hallo()
{
     return "Hello World";
}
$data = hallo();
echo "$data";

// Apa manfaat membuat function ? kalau dilihat sama saja seperti kita meletakkan kata "Hello World" ke dalam sebuah variable dan memanggil variable tersebut , sederhananya variable hanya menyimpan data sedangkan function bisa menyimpan aksi atau kumpulan perintah , dengan adanya function kita jadi bisa memanggil banyak perintah dalam 1 baris kode contoh :
function mention($a)
{
     for ($i = 1; $i <= $a; $i++) {
          echo "<h1>Hallo ke- $i</h1>";
     }
}

echo mention(10);
echo mention(5);

function luasPersegi($a)
{
     echo $a ** 2;
}

function luasPersegi2($a)
{
     return $a ** 2;
}

echo luasPersegi(10) + 200;
echo luasPersegi2(10) + 200;
