<?php
	
	require './classes/contenido.class.php';
	require './classes/xmlFiles.class.php';
	
	$idTxt = $_GET['idTxt']; 
	$language = $_GET['lang'];
	$xml = new xmlFiles("configuracion", $language);
	$cont = new contenido();
	
	echo $cont->getTexto($xml->getDOMFicheroContenidos(), $idTxt);
	
?>