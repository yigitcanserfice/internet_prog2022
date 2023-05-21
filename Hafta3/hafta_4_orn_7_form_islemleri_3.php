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
			<input type="submit" value="Topla" name="topla">
			<input type="submit" value="Çarp" name="carp">
			<input type="submit" value="Üssünü Al" name="usal">
			<hr>
			<?php 
			function us_al($sayi, $us)
			{
				if ($us==1)
					return $sayi;
				return $sayi*us_al($sayi,$us-1);
			}
			
			function duz_ust_al($sayi, $us)
			{
				$ussu = $sayi;
				for($i=1;$i<$us;$i++)
				{
					$ussu*=$sayi;
				}
				return $ussu;
			}
			if (isset($_GET["topla"]))
			{
				echo "Toplam : ".($_GET["s1"]+$_GET["s2"]);
			}
			else if(isset($_GET["carp"]))
			{
				echo "Çarpım : ".($_GET["s1"]*$_GET["s2"]);
			}
			else if(isset($_GET["usal"]))
			{
				echo "Sayı 1 üssü Sayı2 : ".us_al($_GET["s1"],$_GET["s2"])."<br>";
				echo "Sayı 1 üssü Sayı2 : ".duz_ust_al($_GET["s1"],$_GET["s2"]);
			}
			?>
	</form>
	</body>
</html>





















