<?php
	$sunucu = "localhost";
	$kullanici = "root";
	$sifre = "";
	$vt = "internet_programlama";
	$baglanti = new mysqli($sunucu,$kullanici,$sifre,$vt);
	if ($baglanti->connect_error)
		die('Veri Tabanı Bağlantı Hatası');
	
	$baglanti->set_charset("utf8");
?>