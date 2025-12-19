<?php

// => Masih melanjutkan manipulasi string
$stirng_1 = "Saya suka belajar PHP dan menurut saya PHP adalah bahasa terbaik";
$stirng_2 = "Javascript adalah bahasa terbaik";

// strpos(kalimat , kata) digunakan umtuk mencari posisi dari kata tertentu contoh "Saya suka belajar PHP"
// maka akan mendapatkan posisi dari huruf pertama dari kata yang diinginkan.
echo strpos($stirng_1, "PHP");
echo "<br>";

// strspos(kalimat , kata) sama seperti strpos() tapi dia akan mencari posisis huruf awal dari kalimat paling akhir
echo strrpos($stirng_1, "PHP");
echo "<br>";

// str_replace(kata yang ingin diganti , kata yang akan menjadi pengganti , kalimatnya) digunakan untuk mengganti kata tertentu dalam sebuah kalimat
echo str_replace("Javascript", "PHP", $stirng_2);
echo "<br>";

// strlen(kalimat) digunakan untuk mengukur panjang dari suatu string
echo strlen($stirng_1);
echo "<br>";

// strtoupper(kalimat) digunakan untuk membuat semua huruf dalam kalimat menjadi huruf besar
echo strtoupper($stirng_2);
echo "<br>";

// strtolower(kalimat) digunakan untuk membuat semua huruf dalam kalimat menjadi huruf kecil
echo strtolower($stirng_2);
echo "<br>";

// substr(kalimat, mulai dari huruh ke berapa , samapi huruf ke berapa) jadi fungsi ini digunakan untuk mengambil sebagian dari string
echo substr($stirng_1, 0, 20);
echo "<br>";

// => Operator Aritmatika
// Jadi operator aritmatika digunakan untuk melakukan operasi matematika seperti tambah(+) , kurang(-) , kali(*) , bagi(/) bahkan pangkat(**)
$a = 10;
$b = 23;

// Penjumlahan
echo $a + $b;
echo "<br>";

// Pengurangan
echo $a - $b;
echo "<br>";

// Perkalian
echo $a * $b;
echo "<br>";

// Pembagian
echo $a / $b;
echo "<br>";

// Pangkat
echo $a ** 10;
echo "<br>";


// => Operator Perbandingan
// Dalam operator perbandingan nilai yg dihasilkan hanyalah true atau false
// Operator perbanding berarti akan membandingkan 2 nilai atau lebih 
// Dalam operator perbandingan ada beberapa operator yaitu (== , != , === , !== , > , < , <= , >= );
echo $a == "10";
echo "<br>";

echo $a != $b;
echo "<br>";

echo $a === 10;
echo "<br>";

echo $a != "10";
echo "<br>";

echo $a !== "10";
echo "<br>";

echo $a < $b;
echo "<br>";

echo $a > $b;
echo "<br>";

echo $a >= 10;
echo "<br>";

echo $a >= "10";
echo "<br>";


// => Operator Logika
// Jadi operator logika ada beberapa yaitu (&& , || , ! , XOR)
// && akan bernilai true jika pembanding 1 dan pembanding 2 sama-sama true
// || akan bernilai true jika ada dari salah satu yang true dari 2 pembanding
// ! membuat nilai dari pembanding jadi berkebalikan jika nilai pembanding 1 true maka ! akan menghasilkan nilai false
// XOR dia hanya bernilai true kalau salah satu dari 2 pembanding true tapi klo dua"nya true maka nilainya jadi palse
$c = true;
$d = false;

// &&
var_dump($c && $d);
echo "<br>";

// &&
var_dump($c || $d);
echo "<br>";

// &&
var_dump(!$d);
echo "<br>";

// &&
var_dump($c xor $d);
echo "<br>";
