<!DOCTYPE html>
<html>
<head>
  <title>Data Diri</title>
</head>
<body>
<?php
$nama = $tempat = $alamat = $telp = $hobi = $jenis = $agama = $pendidikan = $prestasi = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = test_input($_POST["nama"]);
  $tempat = test_input($_POST["tempat"]);
  $alamat = test_input($_POST["alamat"]);
  $telp = test_input($_POST["telp"]);
  $hobi = test_input($_POST["hobi"]);
  $jenis = test_input($_POST["jenis"]);
  $agama = test_input($_POST["agama"]);
  $pendidikan = test_input($_POST["pendidikan"]);
  $prestasi = test_input($_POST["prestasi"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
  echo "Hasil Inputan ";
  echo "<br/>";
  echo "<br/>";
  echo "Nama :";
  echo $nama;
  echo "<br />";
  echo "Tempat, Tanggal lahir : ";
  echo $tempat;
  echo "<br />";
  echo "Alamat : ";
  echo $alamat;
  echo "<br />";
  echo "No Telp : ";
  echo $telp;
  echo "<br />";
  echo "Hobi : ";
  echo $hobi;
  echo "<br />";
  echo "Jenis Kelamin : ";
  echo $jenis;
  echo "<br />";
  echo "Agama : ";
  echo $agama;
  echo "<br />";
  echo "Pendidikan : ";
  echo $pendidikan;
  echo "<br />";
  echo "Prestasi : ";
  echo $prestasi;

?>
</body>
</html>