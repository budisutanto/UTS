<html>
<head>
	<title>UTS PEMROGRAMAN WEB2</title>
</head>
<body>
	<h1><center>  Data Pemantauan Covid19 </font></h1><hr> <br>
	<form action="covid.php" method="post" enctype="multipart/form-data" name="form1">
	<table width="500" border="0" align="center" cellpadding="0" cellspacing="1">
		
		<tr>
			<td>Nama Wilayah</td>
			<td>: <select name=namawilayah>
			<option value="null">-----pilih-----</option>
			<option value="DKI Jakarta">DKI JAKARTA</option>
			<option value="Jawa Barat">JAWA BARAT</option>
			<option value="Banten">BANTEN</option>
			<option value="Jawa tengah">JAWA TENGAH</option>
			</select></td>
		</tr>

		<tr>
			<td>Jumlah Positif</td>
			<td>: <input type="text" size="8" name="positif"></td>
		</tr>

		<tr>
			<td>Jumlah Dirawat</td>
			<td>: <input type="text" size="8" name="dirawat"></td>
		</tr>

		<tr>
			<td>Jumlah Sembuh</td>
			<td>: <input type="text" size="8" name="sembuh"></td>
		</tr>

		<tr>
			<td>Jumlah Meninggal</td>
			<td>: <input type="text" size="8" name="meninggal"></td>
		</tr>

		<tr>
			<td>Nama Operator</td>
			<td>: <input type="text" size="20" name="operator"></td>
		</tr>

		<tr>
			<td>NIM</td>
			<td>: <input type="text" size="20" name="nim"></td>
		</tr>
	</table>
	<br>
			<center><input type="submit" value="Submit" name="submit">
			<input type="reset" value="reset" name="reset"></center>
	</form>

	<p align="center"><br>

<br>


<?php

$file = "data.txt";

$fp = fopen($file,"r");

while (!feof($fp))

{

$baca = fgets($fp,50);

print("$baca");

}

fclose($fp);

?>

</p>

<p>&nbsp;</p>
</body>
</html>