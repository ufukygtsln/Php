<?php
	
	if(isset($_POST['lessons'])){

		$lessons = $_POST['lessons'];

		echo "Almak istediğiniz eğitimler : <br>";


		foreach ($lessons as $key => $value) {
			
			echo $value."<br>";

		}


	}else{

		echo "veri yok bilader";

	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Başvuru formu</title>
</head>
<body style="text-align: center;">

	<form method="POST" action="">
		
		<h3> ALMAK İSTEDİĞİNİZ DERSİ SEÇİNİZ </h3>
		<select multiple name="lessons[]">
			
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="PHP">PHP</option>

		</select>

		<input type="submit" value="Gönder">

	</form>


</body>
</html>