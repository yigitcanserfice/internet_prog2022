<?php
	$dizi = array(8,2,1,9,11);
	$iliskili_dizi = array(
		"ad" => "Hüseyin",
		"soyad" => "GÜNEŞ",
		"numara" => "200320210036",
		"yas"=>34 
	);
	
	array_push($dizi, 13,15,17);
	print_r($dizi);
	echo "<hr>";
	$dizi[250]=555;
	array_push($dizi, 666);
	print_r($dizi);
	echo "<hr>";
	// diğer php dizi işlemleri için
	// PHP.NET
	shuffle($dizi);
	print_r($dizi);
	echo "<hr>";
	
	sort($dizi);
	print_r($dizi);
	echo "<hr>";
	
	echo count($dizi)."<hr>";
?>



























