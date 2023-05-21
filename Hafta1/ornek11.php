<?php

echo "<table border='!'>";

for($i=1;$i<=10;$i++)
{
	echo "<tr>";
	for($s=1;$s<=10;$s++)
	{
		echo "<td> $i*$s</td>";
		
	}
	echo "</tr>";
	
	
}

echo "</table>";

?>