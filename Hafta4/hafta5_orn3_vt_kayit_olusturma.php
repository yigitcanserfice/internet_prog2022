<?php
	include "baglan.php";
	$sorgu = "
		INSERT INTO `ogrenci` (`id`, `numara`, `isim`, `eposta`) VALUES (NULL, '200320210036', 'Hüseyin GÜNEŞ', 'hgunes@balikesir.edu.tr');
	";
	$baglanti->query($sorgu);
?>