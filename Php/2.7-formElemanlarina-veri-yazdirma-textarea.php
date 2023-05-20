<?php

	/*if ($_POST) {

		$username = $_POST['username'];

		$comment = $_POST['comment'];

		echo $username." Adli kullanicinin yorumu : ".$comment;

		
	}else{


		echo "Post Yok!";
	}*/

	error_reporting(0);

	$username = $_POST['username'] ? $_POST['username'] : null ;

	$comment = $_POST['comment'] ? $_POST['comment'] : null ;

	echo $username." Adli kullanicinin yorumu : ".$comment;
	
?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Form </title>
</head>
<body>

	<form method="POST" action="">
		
		<input type="text" name="username" placeholder="Kullanıcı Adı" value="<?php echo $username ; ?>">
		<br><br>
		<textarea name="comment" rows="10" cols="50" placeholder="Yorumunu buraya yaz la qardesh"><?php echo $comment; ?></textarea>
		<br><br>
		<input type="submit" value="Gönder">


	</form>


</body>
</html>