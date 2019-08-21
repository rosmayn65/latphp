<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Nama    : <input type="text" name="nama"><br>
            Nilai 1 : <input type="text" name="nilai1"><br>
            Nilai 2 : <input type="text" name="nilai2"><br>
            <input type="submit" name="Simpan" value="Simpan">
            <input type="reset" value="Reset">
       </FORM>
    </body>
</html>

<?php
if (isset($_POST['Simpan'])) {
    $nama = $_POST['nama'];
    $nilai1 = $_POST['nilai1'];
    $nilai2 = $_POST['nilai2'];
    $ratarata = ($nilai1+$nilai1) / 2 ;

    echo "Nama Anda : <b>$nama</br>";
    echo "Nilai 1 : <b>$nilai1</br>";
    echo "Nilai 2 : <b>$nilai2</br>";
    echo "Nilai rata-rata : <b>$ratarata</br>";

}
?>