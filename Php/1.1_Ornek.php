<?php

// Yazılıdan geçip kaldığını görme
// 0-35 Kaldı -- 35-50 sorumlu geçti -- 50-100 geçti

$vize = 45;
$final = 45;
$ortalama = (4*$vize)/10 + (6*$final)/10;

if($ortalama > 0 && $ortalama <= 35){
	echo "Kaldın kanka";
}else if ($ortalama > 35 && $ortalama <50) {
	echo "Sorumlu geçtin kanka";
}else if ($ortalama > 50 && $ortalama < 100) {
	echo "Helalllsin kanka";
}else{

	echo "Oyle bi not icat edilmedi ama sen bilun kanks";
}


?>