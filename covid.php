<?php
	$wilayah = $_POST['namawilayah'];
	$jpositif = $_POST['positif'];
	$jdirawat = $_POST['dirawat'];
	$jsembuh = $_POST['sembuh'];
	$jmeninggal = $_POST['meninggal'];
	$namaoperator = $_POST['operator'];
	$nonim = $_POST['nim'];
	$waktu = date("d F Y  H:i:s");
	$nf = "data.txt";
	$fp = fopen($nf,"r+");
	$data = fgets ($fp,50);
	$comfile = file($nf);
	rewind($fp);
	fwrite($fp,

	


	"<center>Data Pemantauan Covid19 wilayah $wilayah <br>
              Per  $waktu (Waktu dan Jam Sekarang) <br>
                $namaoperator / $nonim
                <hr></hr>
    <br>        
    <br>
    <br>
   <table  border='1' align='center'  width='500px' height='100px'>
    <tr>
      <td>Positif</td>
      <td>Dirawat</td>
      <td>Sembuh</td>
      <td>Meninggal</td>
    </tr>
    <tr>
      <td>$jpositif</td>
      <td>$jdirawat</td>
      <td>$jsembuh</td>
      <td>$jmeninggal</td>
    </tr>
  </table>
   <br>
   </center>
	");

for ($i = 0; $i < 999; $i++)
if ($_POST['submit']) {
header ("location: index.php");
}

