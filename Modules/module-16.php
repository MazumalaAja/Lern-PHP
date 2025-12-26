<?php
// Trait merupakan meyhod yang dapat digunakan oleh banyak kelas tapi tidak perlu melakukan pewarisan
trait Message
{
     public function viewMessage()
     {
          return "Hallo zumal dari Tarisa i ❤ you ayangg";
     }
}

class Zumal
{
     use Message;
}

class Lia
{
     use Message;
}

$zumal = new Zumal();
echo $zumal->viewMessage() . "<br>";

$lia = new Lia();
echo $lia->viewMessage();
