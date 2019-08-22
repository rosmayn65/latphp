<?php
if (isset($_POST['Login'])) {
    $user = $_POST ['username'];
    $pass = $_POST ['password'];
    if ($user == "Ilham Ramdani" && $pass == "6518") {
        echo "<h2>Login Berhasil</h1>";
    } else {
        echo "<h2>Login Gagal</h1>";
    }
}
?>