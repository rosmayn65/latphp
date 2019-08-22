<html>
    <head><title>Formulir Pendaftaran</title></head>
    <body>
        <FORM ACTION="register2.php" METHOD="POST" NAME="input">
        <h2>Formulir Pendaftaran</h2>
        <tr>
            No Pendaftaran <input type="text" name="nope"><br>
            NISN <input type="text" name="nisn"><br>
            Nama <input type="text" name="nama"><br>
            Alamat <textarea name="saran" cols="40" rows="5"></textarea><br>
            Tempat Lahir <input type="tl" name="tl"><br>
            Tanggal Lahir <input type="tgl" name="tgl"><br>
            Asal Sekolah <input type="sklh" name="sklh"><br>
            Jenis Kelamin <input type="radio" name="jk" value="TI" checked>Laki-Laki
                          <input type="radio" name="jk" value="TI" checked>Perempuan<br>
                          </tr>
            <select>                           
            Jurusan <option value="rpl">RPL</option>
                    <option value="tkr">TKR</option>
                    <option value="tsm">TSM</option>
            </select><br>
            Nama Ayah <input type="text" name="namaayh"><br>
            Pekerjaan Ayah <input type="text" name="krjayh"><br>           
            Nama Ibu <input type="text" name="namaibu"><br>           
            Pekerjaan Ibu <input type="text" name="krjibu"><br>
            Hobi <input type="checkbox" name="msk" value="Masak">Masak<br>
                 <input type="checkbox" name="nari" value="Nari">Menari<br>
                 <input type="checkbox" name="ngoding" value="Ngoding">Ngoding<br>
                 <input type="checkbox" name="shopping" value="Shopping">Shopping<br>
                 <input type="checkbox" name="mamam" value="Makan">Makan<br>
            Agama : 
        <input type="submit" name="Login" value="Login">
        <input type="reset" name="reset" value="Reset">
        </FORM>
    </body>
</html>