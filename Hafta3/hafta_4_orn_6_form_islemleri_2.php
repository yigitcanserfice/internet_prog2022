<!doctype html>
<html>
	<head>
		<title>PHP ile Form İşlemleri</title>
	</head>
	<body>
		<form action="" method="POST">
			<h1>PHP Form İşlemleri</h1>
			Ad <input type="text" name="ad"><hr>
			Şifre <input type="password" name="sifre"><hr>
			
			Tür <br>
				A<input type="radio" name="tur" value="a">
				B<input type="radio" name="tur" value="b"><hr>
			
			Hobiler<br>
Hocanın Canını Okumak <input type="checkbox" name="hoca"><br>
Derste dersle alakasız ne varsa ilgilenmek <input type="checkbox" name="zopa"><br>
Ruh gibi durmak<input type="checkbox" name="ruh"><br>
Masa altından mesaj atmak<input type="checkbox" name="mesaj"><hr>
			
			Şehir
			<select name="sehir">
				<option value="34">İstanbul</option>
				<option value="B">Varna</option>
				<option value="S">Şumnu</option>
				<option value="10">Balıkesir</option>
			</select><hr>
			Arablar<br>
			<select multiple name="araba[]">
				<option value="volvo">Volvo</option>
				<option value="saab">Saab</option>
				<option value="opel">Opel</option>
				<option value="audi">Audi</option>
			</select>
			
			
			<input type="submit" value="Kaydet" name="kaydet">
		</form>
		<hr>
		<hr>
		<?php
			if(isset($_POST["kaydet"]))
			{
				echo "Ad : ".$_POST["ad"]."<hr>";
				echo "Şifre : ".$_POST["sifre"]."<hr>";
				if (isset($_POST["tur"]))
					echo "Tür : ".$_POST["tur"]."<hr>";
				if (isset($_POST["hoca"]))
					echo "Hoca Durumu : seçildi<hr>";
				else
					echo "Hoca Durumu : seçilmedi<hr>";
				echo "Şehir : ".$_POST["sehir"]."<hr>";
				$i=1;
				if (isset($_POST["araba"]))
				{
					foreach ($_POST["araba"] as $arac)
					{
						echo "$i. Seçilen Araç : ".$arac."<br>";
						$i++;
					}
					echo "<hr>";
				}
			}
		?>
	</body>
</html>





















