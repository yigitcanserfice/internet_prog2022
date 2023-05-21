<!doctype html>
<?php
	include "baglan.php";
	$sorgu="SELECT * FROM `ogrenci`";
	$sonuc = $baglanti->query($sorgu);
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			var_dump($sonuc);
			echo "<hr>";
			if ($sonuc->num_rows > 0)
			{
				while($kayit = $sonuc->fetch_assoc())
				{
					var_dump($kayit);
					echo "<br>";
					echo "id = ".$kayit["id"]."<br>";
					echo "Numara = ".$kayit["numara"]."<br>";
					echo "Ad Soyad = ".$kayit["isim"]."<br>";
					echo "E-Posta = ".$kayit["eposta"];
					echo "<hr>";
				}
			}
		?>
	</body>
</html>














