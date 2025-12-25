<?php
// __constructor & __destructor

class Laptop
{
     public $name;
     private $price;
     public function __construct($name, $price)
     {
          try {
               if (!is_int($price) && !is_float($price)) {
                    throw new Exception("Anda harus memasukkan tipe integer / float untuk price");
               }
               $this->name = $name;
               $this->price = $price;
          } catch (Exception $e) {
               echo "Error : " . $e->getMessage();
          }
     }

     public function __destruct()
     {
          echo "<br> Kode ini berjalan setelah script selesai atau object dihapus";
     }

     public function getPrice()
     {
          if (!is_int($this->price) && !is_float($this->price)) return;
          return "Rp " . number_format($this->price, 0, ",", ".");
     }
}

$redmi = new Laptop("Redmi", 3400000);
echo "Harga Laptop Redmi : " . $redmi->getPrice();

$samsung = new Laptop("Samsung", 3800000);
echo "<br> Harga laptop " . $samsung->name . " : " . $samsung->getPrice();
