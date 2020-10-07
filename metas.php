<?php 
	require_once './classes/configuracion.class.php';
	require_once './classes/cabecera.class.php';
	require_once './classes/xmlFiles.class.php';
			
			$cabecera_contenidos = new cabecera($xml->getXMLFicheroCabecera());
?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="description" content="<?php echo $cabecera_contenidos->getMetas()->getDescription() ?>" />
		<meta name="keywords" content="<?php echo $cabecera_contenidos->getMetas()->getKeywords() ?>" />
		<meta name="author" content="neni^2 desarrollo web" />
		<meta name="robots" content="noodp, noydir">
		<meta name="lang" content="<?php echo $conf->getIdioma() ?>" />
		<meta name="language" content="<?php echo $conf->getIdioma() ?>" />

		