<?php
   // array key numerik
   $a = array ('ilham', 17, true, 14.45);
   echo $a[1];

   for ($i = 4; $i >= 0; $i--){
       echo $a[$i] . "<br>";
   }

   //array key asosiatif
   $aso = ['nama' => 'Rosma', 'umur' => 16,
            'alamat' => 'Bandung' ];

   foreach ($aso as $index){
       echo $index . "<br>";
   }

?>