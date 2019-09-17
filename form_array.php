<html>
    <body>
        <center>
        <p>Form Array</p>
        </center>
        <fieldset>
            <legend>Form Array</legend>
            <form action="" method="post">
                <labelfor="">Masukkan Jumlah</label>
                <input type="number" min="1" name="jml" required>
                <br>
                <input type="submit" name="submit" value="Simpan" <hr>
            </form>
            
            <form action="form_arraypro.php" method="post">
                <?php
                if (isset($_POST['submit'])) {}
                    $jml_form = $_POST['jml'];
                    for ($a=0; $a < $jml_form; $a++) { ?>
                        <label for=>Masukkan Bilangan </label>
                        <input type="text" name="bil[]" required>
                        <label for=>Masukkan Pangkat </label>
                        <input type="text" name="pangkat[]" required>
                        <br>
                        <br>
                    <?php } ?>
                    <input type="submit" name="sbm" value="Simpan">
                    <input type="reset" value="Reset">
            </form>

        </fieldset>
    </body>