<?php
	$dizi = array(3,5,7,9,11);
	echo $dizi[0];
	echo "<hr>";
	$dizi[150]=25;
	echo $dizi[150];
	echo "<hr>";
	$dizi[0]="ABC";
	echo $dizi[0];
	 $dizi[1]=array(1,3,5,7,9);
	//echo $dizi[1];
	echo "<hr>";
	print_r($dizi);
	echo "<hr>";
	print_r($dizi[1]);
	echo "<hr>";
	var_dump($dizi);
?>