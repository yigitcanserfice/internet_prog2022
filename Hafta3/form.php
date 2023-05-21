<?php 
if (isset($_GET["topla"]))
{
	echo "Sayı1 ve Sayı2 arasında rastgele üretilen sayı : ".
	rand($_GET["s1"],$_GET["s2"]);
}
?>