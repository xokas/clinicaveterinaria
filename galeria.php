<?php
	
	require './classes/galeria.class.php';
	require './classes/xmlFiles.class.php';
	
	$language = $_GET['lang'];
	$xml = new xmlFiles("configuracion", $language);
	$gal = new galeria();
	
	echo $gal->getGaleriaFotos($xml->getXMLFicheroGaleria());
	
?>