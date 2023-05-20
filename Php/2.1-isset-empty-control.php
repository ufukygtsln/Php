<?php

/*

	isset değer var mı yok mu ona bakıyo
	empty boş mu değil mi ona bakıyor (username = klains şifre yoksa patlıyo gibi)
	
*/

	if(isset($_POST['username']))
		echo "post var<br>";
	else{
		echo "post yok<br>";
	}

	if (empty($_POST['username']) || empty($_POST['password'])) {

		echo "Kral kullanıcı adı ve ya şifre yok dön bak buyu";
	}

	else{

		echo "aferin akıllandın<br>Şifre = ".$_POST['password'];
		echo "kullanıcı adı =".$_POST['username'];
	}



?>