<?php
if (isset($_POST['input'])) {
    $nama=$_POST['nama'];
    $alamat=$_POST["almt"];
    $nbarang=$_POST["nbrg"];
    $jml=$_POST["jml"];
    $hbarang=$_POST["hbrg"];
    $deskripsi=$_POST["des"];
    $tglpembelian=$_POST["tp"];
    $subtotal=$jml * $hbarang;
    }

    if ($jml < 10) {
        $total = $subtotal -(0.2 * $subtotal);
    } elseif ($jml <= 15) {
        $total = $subtotal - (0.1 * $subtotal);
    } elseif ($jml < 5) {
        $total = $subtotal;
    }
    if ($jml < 0) {
        echo "Maaf Barang Anda Tidak Bisa Diproses";
    } else {
        echo "Nama Costumer : $nama<br>";
        echo "Alamat : $alamat<br>";
        echo "Nama Barang : $nbarang<br>";
    }
?>