<?php
if (isset($_POST['input'])) {
    $a = $_POST ['nope'];
    $b = $_POST ['nisn'];
    $c = $_POST ['nama'];
    $d = $_POST ['almt'];
    $e = $_POST ['tg'];
    $f = $_POST ['tl'];
    $g = $_POST ['asal'];
    $h = $_POST ['l'];
    $i = $_POST ['p'];
    $j = $_POST ['jurusanid'];
    $k = $_POST ['ayh'];
    $l = $_POST ['payh'];
    $m = $_POST ['ibu'];
    $n = $_POST ['pibu'];
    $hb1 = $_POST ['tari'];
    $hb2 = $_POST ['hangout'];
    $hb3 = $_POST ['makan'];
    $hb4 = $_POST ['olhrg'];
    $hb5 = $_POST ['masak'];
    $agm1 = $_POST ['islam'];
    $agm2 = $_POST ['kristen'];
    $agm3 = $_POST ['budha'];


    if ($a == "06"  && $b == "19202122" ) {
        echo "Nama Saya $c <br>";
        echo "Alamat Saya $d <br>";
        echo "Tanggal Lahir $e <br>";
        echo "Tempat Lahir $f <br>"; 
        echo "Asal Sekolah $g <br>";
        echo "Jenis Kelamin $h $i <br>";
        echo "Jurusan Saya $j <br>";
        echo "Nama Ayah Saya $k <br>";
        echo "Pekerjaan Ayah Saya $l <br>";
        echo "Nama Ibu Saya $m <br>";
        echo "Pekerjaan Ibu Saya $n <br>";
        echo "Band Favorit Anda adalah :<br>";
    if (isset($_POST['tari'])) {
        echo "+ " . $_POST['tari'] . "<br>";
    }
    if (isset($_POST['hangout'])) {
        echo "+ " . $_POST['hangout'] . "<br>";
    }
    if (isset($_POST['makan'])) {
        echo "+ " . $_POST['makan'] . "<br>";
    }
    if (isset($_POST['olhrg'])) {
        echo "+ " . $_POST['olhrg'] . "<br>";
    if (isset($_POST['masak'])) {
        echo "+ " . $_POST['masak'] . "<br>";
    }
    if (isset($_POST['agamaid'])) {
        $agm1 = $_POST['agamaid'];
        echo "Agama Saya Adalah :
        <font color=blue><b>$agm1</b></font>";
    }
    }
}
}           
?>