<?php
// Abstract class...
// Kelas Abstract tidak bisa diwariskan dan biasanya punya method tapi tidak didefinisikan...
// Jadi abstract class itu tujuannya sebagai blueprint...

abstract class Hewan
{
     public function bersuara()
     {
          return "<br> Suara Hewan";
     }
}

class Kucing extends Hewan {}

$kucing = new Kucing();
echo $kucing->bersuara();
