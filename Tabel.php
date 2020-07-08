<!DOCTYPE html>
<html>
<head>
	<title>Tabel</title>
</head>
<body>
	<script type='text/javascript'> alert('Formulir Permohonan KTP Disimpan');
	</script>
	<?php
	$Provinsi = $Kota = $Nik = $Nama = $Tempat = $Jenis = $Alamat = $Rt = $Rw = $Desa = $Kecamatan = $Agama = $Status = $Pekerjaan =$Kewarganegaraan = " ";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
	 	  $Provinsi  = strtoupper($_POST['Provinsi']);
		  $Kota = strtoupper($_POST['Kota']);
		  $Nik = strtoupper($_POST['Nik']);
		  $Nama  = strtoupper($_POST['Nama']);
		  $Tempat = strtoupper($_POST['Tempat']);
		  $Jenis = strtoupper($_POST['Jeniss']);
		  $Alamat = strtoupper($_POST['Alamat']);
		  $Rt = strtoupper($_POST['Rt']);
		  $Rw = strtoupper($_POST['Rw']);
		  $Desa = strtoupper($_POST['Desa']);
		  $Kecamatan = strtoupper($_POST['Kecamatan']);
		  $Agama = strtoupper($_POST['Agamaa']);
		  $Status = strtoupper($_POST['Status']);
		  $Pekerjaan = strtoupper($_POST['Pekerjaan']);
		  $Kewarganegaraan = strtoupper($_POST['Negara']);


		  $open = fopen("KTP.txt", "a+");
		  fputs($open, "$Provinsi | $Kota | $Nik | $Nama | $Tempat | $Jenis | $Alamat | $Rt | $Rw  | $Desa | $Kecamatan |  $Agama | $Status | $Pekerjaan | $Kewarganegaraan \n");
		  fclose($open);
		}
?>

<table border="1" width="800px" align="center" bgcolor="99FFFF">
	
	<?php
			$open = fopen("KTP.txt", "a+");
			while ($nilai = fgets($open,500)){
			$garis = explode("|", $nilai);
			echo "<tr><td colspan= 2><center><h3>PRROVINSI $garis[0] <br/> KABUPATEN $garis[1] </h3></td></tr>";
			echo "<tr><td>NIK </td><td>$garis[2]</td></tr>";
			echo "<tr><td>Nama </td><td>$garis[3]</td></tr>";
			echo "<tr><td>Tempat </td><td>$garis[4]</td></tr>";
			echo "<tr><td>Jenis </td><td>$garis[5]</td></tr>";
			echo "<tr><td>Alamat </td><td>$garis[6]</td></tr>";
			echo "<tr><td>Rt </td><td>$garis[7]</td></tr>";
			echo "<tr><td>RW </td><td>$garis[8]</td></tr>";
			echo "<tr><td>Desa </td><td>$garis[9]</td></tr>";
			echo "<tr><td>Kecamatan </td><td>$garis[10]</td></tr>";
			echo "<tr><td>Agama </td><td>$garis[11]</td></tr>";
			echo "<tr><td>Status </td><td>$garis[12]</td></tr>";
			echo "<tr><td>Pekerjaan </td><td>$garis[13]</td></tr>";
			echo "<tr><td>Kewarganegaraan </td><td>$garis[14]</td></tr>";
		}
			fclose($open);
	?>
</table>


</body>
</html>
