<?php
	$a = 5;
	function topla($b)
	{
		return $GLOBALS["a"]+$b;
	}
	echo "Toplam = ".topla(20);

?>