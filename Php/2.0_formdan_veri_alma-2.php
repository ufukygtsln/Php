<?php

/*
	
	2 methot var 1-POST 2-GET
	POST = yazdırır ve google da adres dosya adı kalır
	GET = yazdırır ancak google adresinde dosyada yazılanlarda yazar

	action = hangi dosyaya yönlendireleceği

	input değer alma 
	text dersen görünür
	password üstü kapalıdır
	submit buton mevzusu
	
	placeholder üstlerinde ne yazacağı
	


*/

	echo "Kullanıcı adı :".$_POST['username'];
	echo "<br>Şifre : ".$_POST['password'];

?>