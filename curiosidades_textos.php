<?php
	require './classes/curiosidades.class.php';
	require './classes/xmlFiles.class.php';
	$language = $_GET['lang'];
	$xml = new xmlFiles("configuracion", $language);
	$cur = new curiosidades();
	echo $cur->getTextoRandom($xml->getXMLFicheroCuriosidades());
?>

