<!doctype html>
<html>
	<head>
		<title>PHP ile Form İşlemleri</title>
	</head>
	<body>
		<form action="
<?php echo $_SERVER['PHP_SELF'] ?>
" method="GET" autocomplete="off">
			<h1>PHP Form İşlemleri</h1>
			Sayı 1 <input type="text" name="s1"><hr>
			Sayı 2 <input type="text" name="s2"><hr>
			<input type="submit" value="Rastgele Sayı Üret" name="topla">
			<hr>
			<?php 
			
			if (isset($_GET["topla"]))
			{
				echo "Sayı1 ve Sayı2 arasında rastgele üretilen sayı : ".
				rand($_GET["s1"],$_GET["s2"]);
			}
			
			?>
	</form>
	</body>
</html>





















