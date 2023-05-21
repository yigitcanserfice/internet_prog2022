<?php
	include "baglan.php";
	for ($i=1;$i<=1000;$i++)
	{
		$baglanti->query("
		INSERT INTO `ogrenci` (`id`, `numara`, `isim`, `eposta`) VALUES (NULL, '$i', 'Hüseyin GÜNEŞ', 'hgunes@balikesir.edu.tr');
		");
	}

?>