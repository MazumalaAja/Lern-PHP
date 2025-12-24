<?php
// Object Oriented Programming

// Definisi class
class Car
{
     // Property
     public $name;
     public $color;


     // Method
     public function drive()
     {
          echo "<br> $this->name is runned";
     }
}

$xenia = new Car();
$Avanza = new Car();
$xenia->color = "white";
$xenia->name = "Xenia";
$Avanza->color = "Black";
$Avanza->name = "Avanza";

echo $Avanza->drive();
echo $xenia->drive();

// Class juga memiliki akses variable yaitu public , protected dan privat
// public berarti variable itu bisa diakses dimanapun 
// protected berrati bisa diakses di kelas itu dan keturunannya
// privat hanya bisa diakses dalam kelas itu

class Smartphone
{
     public $name;
     protected $type;
     private $price;
}

$xiaomi = new Smartphone();
$samsung = new Smartphone();
$xiaomi->name = "xiaomi";

var_dump($xiaomi, $samsung);

echo $xiaomi->name;
