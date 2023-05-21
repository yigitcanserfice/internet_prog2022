<!doctype html>
<?php
	include "baglan.php";
	if (isset($_POST["gonder"]))
	{
		$sorgu="
			INSERT INTO `ogrenci` (`id`, `numara`, `isim`, `eposta`) VALUES (NULL, 
			'".$_POST['numara']."', 
			'".$_POST['ad']." ".$_POST['soyad']."', 
			'".$_POST['eposta']."'
			);
		";
		$baglanti->query($sorgu);
	}
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="" method="post">
			Numara
			<input type="text" name="numara">
			<br>
			Ad
			<input type="text" name="ad">
			<br>
			Soyad
			<input type="text" name="soyad">
			<br>
			E-Posta
			<input type="text" name="eposta">
			<br>
			<input type="submit" name="gonder" value="Kaydet">
		</form>
	</body>
</html>
