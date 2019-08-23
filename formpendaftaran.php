<html>
    <head><title>Formulir Pendaftaran</title></head>
    <body>
        <FORM ACTION="formpendaftran02.php" METHOD="POST" NAME="input">
        <table>
        <h2>Formulir Pendaftaran</h2>
        <tr>
    	    <td valign="top">No.Pendaftaran</td>
    	    <td><input type="text" name="nope"></td><br>
    	</tr>
        <tr>
    	    <td valign="top">NISN</td>
    	    <td><input type="text" name="nisn"></td><br>
    	</tr>
        <tr>
            <td valign="top">Nama</td>
    	    <td><input type="text" name="nama"></td><br>
    	</tr>
        <tr>
            <td valign="top">Alamat</td>
    	    <td><textarea cols="22" rows="3"></textarea></td><br>
    	</tr>
        <tr>
    	    <td valign="top">Tanggal Lahir</td>
    	    <td>
    	       <input type="date" name="tg" placeholder="dd">
    	    </td>
    	</tr>
        <tr>
            <td valign="top">Tempat Lahir</td>
    	    <td><input type="text" name="tl"></td><br>
    	</tr>
        <tr>
            <td valign="top">Asal Sekolah</td>
    	    <td><input type="text" name="asal"></td><br>
    	</tr>
        <tr>
    	    <td valign="top">Jenis Kelamin</td>
    	    <td>
    	    	<input type="radio" name="l"cheked>Pria
    	    	<input type="radio" name="p">Perempuan<br>
    	    </td>
    	</tr>
        <tr>
        <td valign="top">Jurusan</td>
        <td>        
            <select name="jurusanid" class="required" title="harus diisi">
            <option value="">- Pilih Jurusan -</option>
            <option value="rpl">RPL</option><br>
            <option value="tsm">TSM</option><br>
            <option value="tkr">TKR</option><br>
        </tr>
        <tr>
            <td valign="top">Nama Ayah</td>
    	    <td><input type="text" name="ayh"></td><br>
    	</tr>
        <tr>
            <td valign="top">Pekerjaan Ayah</td>
    	    <td><input type="text" name="payh"></td><br>
    	</tr>
        <tr>
            <td valign="top">Nama Ibu</td>
    	    <td><input type="text" name="ibu"></td><br>
    	</tr>
        <tr>
            <td valign="top">Pekerjaan Ibu</td>
    	    <td><input type="text" name="pibu"></td><br>
    	</tr>
        <tr>
    	    <td valign="top">Hobbi</td>
    	    <td>
    	    	<input type="checkbox" name="tari">Menari<br>
    	    	<input type="checkbox" name="hangout">Hangout<br>
    	    	<input type="checkbox" name="mkn">Kuliner<br>
    	    	<input type="checkbox" name="olhrg">Olahraga<br>
    	    	<input type="checkbox" name="masak">Memasak<br>
    	    </td>
    	</tr>
        <tr>
        <td valign="top">Agama</td>
        <td>        
            <select name="agamaid" class="required" title="harus diisi">
            <option value="islam">Islam</option><br>
            <option value="kristen">Kristen</option><br>
            <option value="budha">Budha</option><br>
        </tr>
        </td>
       </tr>
       </table>
       <input type="submit" name="dftr" value="Daftar">
    <input type="reset" name="reset" value="Reset">
        </FORM>
    </body>
</html>