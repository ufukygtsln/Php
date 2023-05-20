<?php

//if - elseif - else

$sayi1 = 20;
$sayi2 = 21;

/*$kontrol = $sayi1 == $sayi2 ? "Sayilar esittir.<br>" : "Sayilar esit degildir !<br>";
echo $kontrol;

$kontrol1 = $sayi1 < $sayi2 ? "sayi1 kücüktür <br>" : "Sayi2 kücüktür <br>";
echo $kontrol1;

$kontrol2 = $sayi1 != $sayi2 ? "Sayilar esit degildir<br>" : "Sayilar esittir<br>";
echo $kontrol2;


if ($sayi1==$sayi2) {
	echo "Sayilar birbirine esittir <br>";
}else if ($sayi1<$sayi2) {
	echo "Sayilar birbirine esit degildir ve sayi1 kucuktur<br>";
}else{
	echo "Sayilar birbirine esit degildir ve sayi2 kucuktur";
}
*/


// karşılaştırma operatörleri

/*
echo $sayi1 < $sayi2 ? "Sayi1 sayi2 den küçüktür<br>" : "Büyüktür<br>";
echo 10<20 ? "küçüktür<br>" : "Büyüktür<br>";
echo 10 != 10 ? "esit degildir<br>" : "esittir<br>";
echo 10 == 10 ? "esit degildir <br>" : "esittir";
*/


// && (ve) - || (veya)

$kullaniciAdi = "Admin";
$sifre = "1234";

if($kullaniciAdi == "Admin" && $sifre == "1234" ){
	echo "Giris basarili";
}else{
	echo "Giris basarisiz";
}




?>