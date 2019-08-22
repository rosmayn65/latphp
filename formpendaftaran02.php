<?php
if (isset($_POST['input'])) {
    $a = $_POST ['nope'];
    $b = $_POST ['nisn'];
    $c = $_POST ['nama'];
    $d = $_POST ['alamat'];
    $e = $_POST ['tl'];
    $f = $_POST ['tgl'];
    $g = $_POST ['sklh'];
    $h = $_POST ['jk'];
    $i = $_POST ['jk'];
    $j = $_POST ['rpl'];
    $k = $_POST ['tsm'];
    $l = $_POST ['tkr'];
    $m = $_POST ['namaayh'];
    $n = $_POST ['krjayh'];

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