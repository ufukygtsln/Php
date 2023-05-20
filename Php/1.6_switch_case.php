<?php
	$gun = "Cuma";

	switch ($gun) {

		//case içinde 1-2-3-4 gibi sayilar da kullanilabilir

		case "Cuma":
			echo "Bugun mubarek gun gardasım<br>";
			break;
		
		case "Sali":
			echo("Bugun sali<br>");
			break;
		case "Carsamba":
			echo("Bugun Carsamba<br>");
			break;
		default:
			echo "Hicbir gun bulunamadi<br>";	
	}

	echo "Kontrol tamamlandi<br>";

?>