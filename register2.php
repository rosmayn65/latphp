<?php
if (isset($_POST['Login'])) {
    $a = $_POST ['nama'];
    $b = $_POST ['alamat'];
    $c = $_POST ['jk'];
    $d = $_POST ['agama'];
    $e = $_POST ['email'];
    $f = $_POST ['password'];
    if ($e == "Ilhamramdani@gmail.com"  && $f == "1625" ) {
        echo "Nama : $a <br>";
        echo "Alamat : $b <br>";
        echo "Jenis Kelamin : $c <br>"; 
        echo "Agama : $d <br>";
        echo "Email :$e <br>";
        echo "<h2>Akun Anda Aktif</h2>";
    } else {
    echo "Nama : $a <br>";
    echo "Alamat : $b <br>";
    echo "Jenis Kelamin : $c <br>"; 
    echo "Agama : $d <br>";
    echo "Email :$e <br>";
    echo "<h2>Akun Anda Tidak Aktif</h2>";
    }
}
?>