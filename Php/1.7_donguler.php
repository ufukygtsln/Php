<?php

/*

for döngüsü

for ($i=1; $i <6 ; $i++) { 
	echo "$i - Salam Dunya ben masaka<br>";

	for ($j=1; $j <6 ; $j+=2) { 
		echo "$j";
	}
	echo "<br>";
}

While döngüsü

$sayi = 1;

while ($sayi <= 10) {
	echo "$sayi Merhaba kanka<br>";
	$sayi++;
}
*/

$sayi = 0;

echo "----Cift Sayilar (0'dan 10'a)---------- <br>";

while ($sayi <= 10) {
	
	if ($sayi %2 == 0) {
		echo "$sayi <br>";
		$sayi++;
	}
	$sayi++;
}


?>