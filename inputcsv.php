<html>
<head>
<title> Input CSV </title>
</head>

<body>
<center>
<img src=header.png ></img>
<font size=12>
<br>
<?php
$tulis = $_POST["nama"] . ",";
$tulis .= $_POST["buku"] . ",";
$tulis .= $_POST["saran"] . "\n"; 
$file = fopen("data.csv","a+");
fputs($file,$tulis);
fclose($file);
?>
</br>
Data telah diinputkan. <br />
<a href="index.php"><img src=home.png></img><a>
<br/>
Klik <a href="bacacsv.php">di sini</a>
untuk melihat datanya.
</font>
<br>
<br>
<br>
<br>
<br>
<img src=footer.png ></img>
</center>
</body>
</html>

