<?php
// Polymorphism && Overriding...
// Adalah konsep subclass menggunakan method yang sama namun dia bisa mengeluarkan output yg berbeda...

class Animals
{
     public function voiced()
     {
          return "Suara Hewan";
     }
}

class Cat extends Animals
{
     public function voiced()
     {
          return "Maiww";
     }
}

$animal_1 = new Animals();
echo $animal_1->voiced();

$cat_1 = new Cat();
echo "<br>" . $cat_1->voiced();
