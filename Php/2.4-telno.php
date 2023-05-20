<?php

/*

hr - yatay çizgi çeker
required - doldurmayı zorunlu tut

*/


	if ($_POST) {
		echo "post var! <hr>";

		$phone = $_POST['phone'];

		if (!is_numeric($phone) ) {
			echo "Telefon numarasi hatali reisim";
			echo "<br>3 saniye icinde forma tekrar yonlendiriliyorsunuz...";
			header("Refresh:3");
		}else{

			echo "Dogru telefon numarasi tusladiniz<br>";
			echo "$phone";

		}



	}else{
		echo "post yok! <hr>";
	}

	?>


	<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
	</head>
	<body>

		<form method="POST" action="">
			
			<input type="text" name="phone" placeholder="Telefon numerosu" required maxlength="10" minlength="10">
			<input type="submit" value="Gönder">



		</form>

	
	</body>
	</html>



	<?php



?>