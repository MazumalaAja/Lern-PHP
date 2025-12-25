<?php
// Inheritance
// pewarisan , sama seperti namanya jadi class  bisa mewariskan method ke class lain , yang di wariskan namanya sub class dan yang diwarisi disebut parent class

class Animal
{
     protected $name;
     protected $type;
     protected $place;
     private $voice;

     public function __construct($name, $type, $place)
     {
          $this->name = $name;
          $this->type = $type;
          $this->place = $place;
     }

     public function setVoice($params)
     {
          $this->voice = $params;
     }

     public function getVoice()
     {
          return $this->voice;
     }
}

class Mamalia extends Animal {}

$cow = new Mamalia("Cow", "4 legs", "field");
$cow->setVoice("Mooo");
echo $cow->getVoice();
