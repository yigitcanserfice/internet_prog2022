<?php
	$a = 5;
	function topla($a, $b)
	{
		return $a+$b;
	}
	echo "10 ile 20 nin toplamı = ".topla(10,20);
	
	function cok_topla(...$sayilar)
	{
		$toplam=0;
		foreach($sayilar as $sayi)
		{
			$toplam+=$sayi;
		}
		return $toplam;
	}
	echo "<hr>";
	echo cok_topla(1,2,3,4,5,6,7,8,9,10,20,30,40,50,60);
?>