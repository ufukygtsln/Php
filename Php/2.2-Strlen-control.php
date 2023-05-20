<?php


	$username = $_POST['username'];

	$maxLength = 10;
	$usernameLength = strlen($_POST['username']);

	if ($usernameLength>$maxLength) {
		echo "aga oyle isim mi olur aq";
	}else{

		echo "Salam canım : $username";
	}


	$comment = $_POST['comment'];
	$index = strpos($comment, "s");

	echo $index+1;

?>