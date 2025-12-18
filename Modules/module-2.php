<?php

// Masih melanjutkan manipulasi string
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
