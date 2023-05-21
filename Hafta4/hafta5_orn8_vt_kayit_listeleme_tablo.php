<!doctype html>
<?php
	include "baglan.php";
	
	if(isset($_POST["sil"]))
	{
		$kayitno = $_POST['kayit_no'];
		$sorgu="DELETE FROM `ogrenci` WHERE `ogrenci`.`id` = 
		$kayitno
		";
		$baglanti->query($sorgu);
	}
	$sorgu="SELECT * FROM `ogrenci`";
	$sonuc = $baglanti->query($sorgu);
?>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<table border="1">
			<thead>
				<th>ID</th>
				<th>Numara</th>
				<th>İsim</th>
				<th>E-Posta</th>
				<th>İşlem</th>
			</thead>
			<tbody>
			<?php
				if ($sonuc->num_rows > 0)
				{
					while($kayit = $sonuc->fetch_assoc())
					{
						echo "<tr>";
						
							echo "<td>".$kayit["id"]."</td>";
							echo "<td>".$kayit["numara"]."</td>";
							echo "<td>".$kayit["isim"]."</td>";
							echo "<td>".$kayit["eposta"]."</td>";
echo "<td>
<form action='' method='post'>
<input type='hidden' name='kayit_no' value='".$kayit["id"]."'>
<input type='submit' name='sil' value='sil'>
</form>
</td>";
	
						echo "</tr>";
					}
				}
			?>
			</tbody>
		</table>
	</body>
</html>














