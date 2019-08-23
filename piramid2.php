<?php
if (isset($_POST['Input'])) {
    $bin = $_POST ['bt'];
    for($a=1; $a<=$bin; $a++){
    for($b=$bin; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
}
    echo "Jumlah Bintang : $bin";
?>