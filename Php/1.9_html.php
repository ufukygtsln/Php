<?php
	
	$baslik = "DUNYA CUPASU";
	$metin = "penaldo = elendi<br>neymar = elendi<br>debroyn = elendi<br>SON KALE MESSİ = SAPASAGLAM";


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Baslik Galiba Bura</title>
	<meta charset="utf-8">

	<style type="text/css">
		h1 {

			color: #ff0000;
		}

		p {

			color: #66FF33;
		}



	</style>

</head>
<body>

	
	<h1>HTML BAŞLIK</h1>
	
	<p>Burayı html dosyası olarak yazıyom kankssss</p>
	<?php

	echo "<h1>kanka bu ne bicim</h1> sey oldu la öyle";


	?>

	<h1>
		<?php

			echo("Yukardaki baslik : $baslik");

		?>
	</h1>

	<p style="color: #000000;">
		<?php	

			echo("Yukardaki metin : $metin");


			for ($i=0; $i < 5 ; $i++) { 
				echo "<br>harmanim yukleniyo $i<br>";
			}


		?>
	</p>	




</body>
</html>