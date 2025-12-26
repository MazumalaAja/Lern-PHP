<?php
// Interface merupakan kumpulan method yang harus di definisikan jika kelas tersebut menggunakan interface simplenya untuk membuat kode kita jadi lebih terstruktur

interface Kendaraan
{
     public function bergerak();
     public function bahanBaku();
     public function bengkel();
}

class Mobil implements Kendaraan
{
     public function bergerak()
     {
          return "Mobil Bergerak";
     }

     public function bahanBaku()
     {
          return "Mobil isi bensin";
     }

     public function bengkel()
     {
          return "Mobil ganti Oli";
     }
}
