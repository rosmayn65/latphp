<?php
session_start();
if (isset($_SESSION['login'])) {
    ?>
    <<!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
    </head>

    <body>
        <nav>
            <a href="hal1.php">Halaman 1</a> |
            <a href="hal2.php">Halaman 2</a> |
            <a href="hal3.php">Halaman 3</a> |
            <a href="logout.php" onclick="myFunction()">Logout</a> |
        </nav>
        <center>Halaman 2</center>
    </body>

    </html>
<?php } else{
    header ("location: login.")
}
?>