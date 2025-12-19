<?php

// Array : Merupakan kumpulan nilai yang diletakkan dalam 1 variable
// Cara membuat array ada 2 dengan array() dan juga dengan menggunakan []
$data_1 = array("Zumal", 23, 169.8);
$data_2 = ["Tarisa", 19, 167.2];

var_dump($data_1);
echo "<br>";
var_dump($data_2);

// Cara akses data di array dengan menggunakan index misal $data_1[0] maka akan keluar Zumal
echo "<br> $data_1[0] <br>";

// Array Assosisatif : Merupakan array yang indexnya bisa selain angka bisa string
$data_3 = [
     "Nama" => "Muhammad Azumal Aulia",
     "Umur" => 23,
     "Tinggi" => 170,
     "Berat Badan" => 57.9,
];

echo "<br>" . $data_3["Berat Badan"] . "<br>";

// Array Multidimensional
$data_4 = [
     ["name" => "Azumal", "age" => 23],
     ["name" => "Tarisa", "age" => 19],
     ["name" => "Ayu", "age" => 20],
];

var_dump($data_4);

foreach ($data_4 as $item) {
     echo "<br>" . $item["name"];
     echo "<br>" . $item["age"];
}

// Menguuruutkan isi Array dengan short()
$num_1 = [11, 4, 7, 89, 45];
sort($num_1); // Tapi perlu diingat bahwa sort tidak menambahkan array baru namun mengubah array lama
var_dump($num_1);

// Menggabungkan 2 array atau lebih
// array_merge()

$hobby_1 = ["Coding", "Baca buku", "Nonton Film"];
$hobby_2 = ["Menulis", "Memanah", "Booxing"];
$hobby_3 = ["Nguli", "Jogging", "Berenang"];

$hobbies = array_merge($hobby_1, $hobby_2, $hobby_3);

var_dump($hobbies);

// Mengecek Elemen dalam array
// in_array()

$datas = ["Tarisa", "Clara", "Zaara", "Ayu"];

if (in_array("Ayu", $datas)) {
     echo "<br>Yups benar pacar kamu AYU";
} else {
     echo "<br>Yah disana gak ada pacar kamu";
}
