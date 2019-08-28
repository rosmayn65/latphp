<html>
<head>
<h1><font face="Courier New" size="5">Kwitansi Pembayaran</font></h1>

<body>
<FORM ACTION="kwitan2.php" METHOD="POST" NAME="input">

<table>
        <tr>
        <td>Nama</td>
        <td><input type="text" name="nama"></td><br>
        </tr>

        <tr>
        <td>Alamat</td>
        <td><textarea cols="22" rows="3"></textarea></td><br>        
        </tr>

        <tr>
        <td>Nama Barang</td>
        <td><input type="text" name="nbrg"></td><br>
        </tr>

        <tr>
        <td>Harga Barang</td>
        <td><input type="number" name="hbrg"<br>
        </tr>

        <tr>
        <td>Jumlah Barang</td>
        <td><input type="number" name="jbrg"><br>
        </tr>

        <tr>
        <td>Deskripsi</td>
        <td><textarea cols="22" rows="3"></textarea></td><br>        
        </tr>

        <tr>
    	<td valign="top">Tanggal Pembelian</td>
    	<td><input type="date" name="tp" placeholder="dd"></td>
    	</tr>
</table>
        <input type="submit" name="htg" value="Hitung">
        <input type="reset" name="reset" value="Batal">
</FORM>
</body>
</html>