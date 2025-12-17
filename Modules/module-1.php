<?php

// Cara mendeklarasikan variable adalah dengan menggunakan $
// Tidak boleh menggunakan spasi ❌ $nama lengkap ✅ $namaLengkap / $nama_lengkap
// Tidak boleh menggunakan angka diawal ❌ $1nama ✅ nama1
// Dan sintax PHP harus diakhiri ;

// Membuat variable dengan bebrapa tipe data
$nama = "Muhammad Azumal Aulia"; // Tipe string = berupa tipe data text.
$umur = 21; // Tipe data Integer =  berupa tipe data angka bulat.
$tinggi = 169.9; // Tipe data Float(Double) =  merupakan tipe data angka desimal.
$pintar = true; // Tipe data Bool(Boolean) = merupakan tipe data yg punya nilai (benar / salah) itu aja.
$isi_dompet = null; // Tipe data Null =  Merupakan tipe data kosong 😥

// menampilkan hasil dari variable
// saya menggunakan var_dump() karena bisa menampilkan tipe datanya juga.
var_dump($nama);
echo "<br>";

var_dump($umur);
echo "<br>";

var_dump($tinggi);
echo "<br>";

var_dump($pintar);
echo "<br>";

var_dump($isi_dompet);
echo "<br>";

// Beberapa cara melihat tipe data di PHP
//  gettype()
echo gettype($nama);
echo "<br>";

// var_dump()
var_dump($nama);
echo "<br>";

// is_*(maksudnya habis is berikan tipe data apa yang mau dilihat)
// kalo menghasilkan 1 berarti true klo ga menampilkan apapun berarti false
echo is_string($nama); // true
echo is_int($nama); // false
echo is_bool($nama); // false
echo is_float($nama); // false
echo is_null($nama); // false
echo "<br>";

// => Manipulasi string
// Jadi string dapat dibuat menggunakan "" atau '' contoh = "Zumal" / 'Tarisa'
// . = merupakan oprator untuk menggabungkan string
$nama1 = 'Zumal';
$nama2 = 'Clara';
$nama3 = 'Yuna';

echo 'zumal' . ' 💓 ' . 'Risa';
echo "<br>";

echo $nama1 . ' 💓 ' . $nama2;
echo "<br>";

// klo anda menggunaka "" makan anda langsung bisa menambahkan 2 variable
// berbeda dengan '' anda harus pakai . untuk menambahkan 2 variable
echo "$nama1 💓 $nama3";
