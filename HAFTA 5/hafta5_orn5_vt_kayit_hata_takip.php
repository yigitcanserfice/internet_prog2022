<?php
	include "baglan.php";
	$sorgu="
		INSERT INTO `ogrenci123` (`id`, `numara`, `isim`, `eposta`) VALUES (NULL, '123', 'Hüseyin GÜNEŞ', 'hgunes@balikesir.edu.tr');
		";
	if(!$baglanti->query($sorgu))
		echo $baglanti->error;
	
	$sorgu="
		INSERT INTO `ogrenci` (`id`, `numara`, `isim`, `eposta`) VALUES (NULL, '123', 'Hüseyin GÜNEŞ', 'hgunes@balikesir.edu.tr');
		";
	if(!$baglanti->query($sorgu))
		echo $baglanti->error;
?>