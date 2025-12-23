<?php

// include & require
// Fungsi require dan include itu untuk menyertakan file lain ke dalam suatu file php
// Perbedaannya require dan include , untuk include hanya akan memberikan warning jika ada error namun tidak menghentikan eksekusi kode , kalo require akan memberikan pesan error dan akan langsung menghentikan eksekusi kode selanjutnya

echo "<br>Ini hasil include : <br>";
include "module-1.php";

echo "<br>Ini hasil require : <br>";
require "module-2.php";
