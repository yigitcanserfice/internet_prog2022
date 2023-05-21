<?php
	$sunucu = "localhost";
	$kullanici = "root";
	$sifre = "";
	$vt = "internet_programlama_19";
	$baglanti = new mysqli($sunucu,$kullanici,$sifre,"");
	if ($baglanti->connect_error)
		die('Veri Tabanı Bağlantı Hatası');
	
	$baglanti->query("CREATE DATABASE $vt");
	echo "$vt veri tabanı oluşturuldu";
?>