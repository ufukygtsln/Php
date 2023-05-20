<?php

/*
(kırpma işlemi)
substr paragrafın neresinden neresini alacağını belirler örneğin kelime "GALATASARAY" sa substr($comment, 0,2) dersen
GAL yazar


strpos($comment,".") dersen ilk noktayı görünce durur

*/

$comment = $_POST['comment'];
$maxlength = 100;

$commentLength = strlen($comment);


if ($commentLength > $maxlength) {
	$cropComment = substr($comment,0,100);
	echo $cropComment."<a href = '#'>Yorumun tamami icin tikla</a>";

}else{

	echo $comment;
}



?>