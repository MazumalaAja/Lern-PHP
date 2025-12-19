<?php

// Looping : merupakan uuntuk menjalankan atau mengeksekusi kode berulang kali

// While loop
$a = 1;

while ($a <= 5) {
     echo "Hallo ke- $a";
     echo "<br>";
     $a++;
}

// Do while loop
$i = 1;
do {
     echo "Hallo ke- $i";
     echo "<br>";
     $i++;
} while ($i <= 5);


// while dan do while itu sama saja melakukan perulangan namun ada yang perlu dipahami kalo while andaikan kondisinya dari awal false maka blok kode sama sekali tidak akan dijalankan tapi do while loop minimal sekali kode dijalankan

// For loop

for ($s = 0; $s <= 5; $s++) {
     echo "<br>Hallo ke- $s<br>";
}

// continue
// digunakan jika ingin melewatkan iterasi tertentu , seperti jika anda ingin mangambil angka ganjil dan tidak ingin mengambil angka genap

$d = 1;
while ($d < 30) {
     if ($d % 2 != 0) {
          $d++;
          continue;
     }
     echo "Bilangan genap ke- $d";
     echo "<br>";
     $d++;
}

// break
// Jika anda ingin menghentikan iterasi jadi sama seperti continue dia tidak akan menjalankan blok kode dibawahnya namun klo break dia benar-benar tidak menjalanjan lagi jika kondisinya true klo continue tadi dia memang tidak menjalankan pada iterasi tersebut namun melanjutkan ke iterasi selanjutnya

for ($z = 1; $z <= 10; $z++) {
     echo "Perulangan ke- $z";
     echo "<br>";
     if ($z == 8) break;
}

// ForEach() digunakan untuk menjalankan perulangan dari sebuah array
$data = ["Mangga", "Apel", "Blueberry", "Nanas"];

foreach ($data as $item) {
     echo "Buah : $item <br>";
}
