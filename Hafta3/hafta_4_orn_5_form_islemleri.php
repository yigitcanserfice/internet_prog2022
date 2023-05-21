<!doctype html>
<html>
	<head>
		<title>PHP ile Form İşlemleri</title>
	</head>
	<body>
		<form action="" method="post">
			<h1>PHP Form İşlemleri</h1>
			Ad <input type="text" name="ad"><hr>
			
			<input type="submit" value="Kaydet" name="kaydet">
		</form>
		<hr>
		<hr>
		<?php
			if(isset($_POST["kaydet"]))
			{
				echo "Ad : ".$_REQUEST["ad"];
				echo "<hr>";
				echo "Ad : ".$_POST["ad"];
			}
		?>
	</body>
</html>