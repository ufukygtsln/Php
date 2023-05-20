<?php

/*
	for ($i=0; $i < 5 ; $i++) { 
		// code...

		echo "$i Salam dunya<br>";

	}


	$sayi = 0;
	while ($sayi <= 10) {
		// code...

		if ($sayi % 2 == 0) {
			// code...
			echo "$sayi<br><br>";
		}


	$sayi++;	
	}


	$sayi1 = 1;

	do {
		
		echo "$sayi1 salam dunya !<br>";
		$sayi1++;

	} while ($sayi1 < 10);

*/


	$isimler = array("ronaldo","messi","neymar","zimbambe","haland","debroyn");

	foreach ($isimler as $index => $ad ) {
		// range komutu - nerden nereye gidileceğini gösterir (a-z)(1-10) gibi

		// $harfler = range("a","z");
		// $sayilar = range(1-10);

		
		if ($index % 2 == 0) {
			echo "$index li eleman - $ad - balon<br>";
		}else{
			echo "$index li eleman - $ad - kraaaall<br>";
		}


	}



?>