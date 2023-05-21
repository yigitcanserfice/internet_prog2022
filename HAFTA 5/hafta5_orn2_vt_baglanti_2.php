<?php
	include "baglan.php";
	$sorgu = "
	CREATE TABLE `internet_programlama`.`ogrenci2` ( `id` INT NOT NULL AUTO_INCREMENT ,  `numara` BIGINT NULL ,  `isim` VARCHAR(50) NULL ,  `eposta` VARCHAR(30) NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB CHARSET=utf8 COLLATE utf8_turkish_ci;
	";
	$baglanti->query($sorgu);
?>