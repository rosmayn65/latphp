<?php
$u = [0,1,2,3,4,5,6,7,8,9];
for ($i=0; $i < count ($u); ++$i) {
    echo "Data ke-$i dengan index $u[$i] <br>";
}
echo "<br><br><br>";

foreach ($u as $c) {
    echo "Ke-$c <br>";
}
echo "<br><br><br>";

$i = 0;
while ($i <= 10) {
    echo $i++ . " ";
}
echo "<br><br><br>";
$i = 1;
while ($i <= 10) :
    echo $i;
    $i++;
endwhile;

echo "<br><br><br>";
for ($i=1; $i <= 10 ; $i++) {
    if ($i%2 ==1) {
        $f = "ganjil";
    }
    else{
        $f = "genap";
    }
    echo "$i adalah bilangan $f <br>";
}
echo "<br><br><br>";

for ($i=1; $i <= 10 ; $i++) {
    echo "________________<br>";
    echo "perkalian $i <br>";
    echo "----------------<br>";
    for ($k=1; $k <= 10 ; $k++) {
        $j = $i * $k;
        if ($j%2 == 1) {
            $f = "ganjil";
    }
    else{
        $f = "genap";
    }
    echo "$i x $k = $j adalah bilangan $f <br>";
    }
}
?>