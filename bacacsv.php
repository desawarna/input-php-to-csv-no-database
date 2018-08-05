<html>
<head>
<title> CSV </title>
</head>

<body>
<center>
<img src=header.png ></img>
</br>
</br>
<H1> Laporan Buku Baca Ditempat</H1>
<table border=1>
<tr>
	<td><b> Nama </b></td>
	<td> <b>Buku_Dibaca </b></td>
	<td> <b>Saran </b></td>
</tr>

<?php
$baris = 1;
$file = fopen("data.csv","r");
while ($data = fgetcsv($file, 1000, ",")) {
	$jumlah = count($data);
	echo "<tr>";
	for ($i=0; $i < $jumlah; $i++) {
		echo "<td> $data[$i] </td>";
	}
	echo "</tr>";
	$baris++;
}
fclose($file);
?>

</table>
<center>
</br>
</br>
<a href="index.php"><img src=home.png></img><a>
<a href="data.csv"><img src=csv.png></img><a>
</br>
</br>
<img src=footer.png ></img>
</body>
</html>

