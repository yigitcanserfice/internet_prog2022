<!doctype html>
<html>
	<head>
		<title>200320210036</title>
	</head>
	<body>
		<form action="" method="POST">
			<fieldset>
				<legend>Hesap Formu</legend>
				<table>
					<tr>
						<td width="100">Sayı 1</td>
						<td>:</td>
						<td><input type="text" name="sayi1"></td>
					</tr>
					<tr>
						<td width="100">İşlem</td>
						<td>:</td>
						<td>
							<select name="islem" style="width:165px">
								<option value="topla">Topla</option>
								<option value="carp">Çarp</option>
								<option value="ust">Üst Al</option>
								<option value="fakt">Faktöriyel</option>
								<option value="tablo">Tablo Çiz</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="100">Sayı 2</td>
						<td>:</td>
						<td><input type="text" name="sayi2"></td>
					</tr>
					<tr>
						<td colspan="3">
			<input type="submit" name="islemyap" value="İşlem Yap" style="width:275px">
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
		<?php
			if (!empty($_POST["islemyap"]))
			{
				if ($_POST["islem"]=="topla")
				{
					echo $_POST["sayi1"]." + "
						.$_POST["sayi2"]." = "
						.($_POST["sayi1"]+$_POST["sayi2"]);
				}
				else if ($_POST["islem"]=="carp")
				{
					echo $_POST["sayi1"]." * "
						.$_POST["sayi2"]." = "
						.($_POST["sayi1"]*$_POST["sayi2"]);
				}
				else if ($_POST["islem"]=="ust")
				{
					$ust=$_POST["sayi1"];
					for ($i=1;$i<$_POST["sayi2"];$i++)
					{
						$ust*=$_POST["sayi1"];
					}
					echo $_POST["sayi1"]." üssü "
						.$_POST["sayi2"]." = "
						.($ust);
				}
				else if ($_POST["islem"]=="fakt")
				{
					$ust=$_POST["sayi1"];
					for ($i=1;$i<$_POST["sayi1"];$i++)
					{
						$ust*=$i;
					}
					echo $_POST["sayi1"]." faktöriyeli = "
						.($ust);
				}
				else if ($_POST["islem"]=="tablo")
				{
					$no=1;
					echo "<table border='2'>";
					for ($i=1;$i<=$_POST["sayi1"];$i++)
					{
						echo "<tr>";
						for ($s=1;$s<=$_POST["sayi2"];$s++)
						{
							echo "<td>";
							echo $no++;
							echo "</td>";
						}
						echo "</tr>";
					}
					echo "</table>";
				}
			}
		?>
	</body>
</html>