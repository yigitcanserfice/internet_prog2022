<?php
	$baglanti = new mysqli("localhost","root","","internet_programlama");
	if ($baglanti->connect_error) {
		die('Bağlantı Hatası : (' . $baglanti->connect_errno . ') '
            . $baglanti->connect_error);
	}
	echo 'Başarılı... ' . $baglanti->host_info . "\n";
?>