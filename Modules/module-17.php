<?php
// Static method
// Merupakan konsep dimana method bisa di akses atau digunakan tanpa membuat Object

class Calculator
{
     public static function plus($a, $b)
     {
          return $a + $b;
     }
}

echo Calculator::plus(200, 340);
