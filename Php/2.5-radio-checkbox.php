<?php


	error_reporting(0);
/*

radio tek seçim için
checkbox çoklu seçim için yazılır
body içindeki text align seçimleri kendi oluşturur 

*/


if ($_POST) {	

	$name = $_POST['name'];
	echo $name."<br>";
	$cinsiyet = $_POST['gender'];
	echo $cinsiyet."<br>";
	$lessons = $_POST['lessons'];
	foreach ($lessons  as $key => $value) {
		echo $value."<br>";
	}



}else{

	echo "post yok!";
}



?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Başvuru formu</title>
	<meta charset="utf-8">
</head>
<body style="text-align: center;">

	<form method="POST" action="">

		<h2> Başvuru Formu </h2>
		<h3> Ad Soyad </h3>
		<input type="text" name="name">
		<hr>
		<h3> Cinsiyet </h3>
		<input type="radio" name="gender" value="Bay"> Bay
		<input type="radio" name="gender" value="Bayan"> Bayan
		<hr>
		<h3> Eğitim </h3>
		<input type="checkbox" name="lessons[]" value="HTML"> HTML
		<input type="checkbox" name="lessons[]" value="CSS"> CSS
		<input type="checkbox" name="lessons[]" value="PHP"> PHP
		<hr>
		<input type="submit" value="GONDER">


	</form>



</body>
</html>