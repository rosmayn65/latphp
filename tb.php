<?php
    if (isset($_POST['save'])){
        $n = $_POST['nm'];
        $a = $_POST['tb'];
        $b = $_POST['bb'];
        
        function TNI ($tb, $bb)
        {
            if ($tb > 165 && bb > 60){
                return "selamat Anda Diterima";
            }else{
                return "Kembali Latihan Pantang Menyerah";
            }
        }
        echo "Nama : $n <br>";
        echo "TB : $a cm<br>";
        echo "BB : $b kg<br>";
        echo "Keterangan : " . TNI($a, $b);
    }
?>