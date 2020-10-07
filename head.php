<?php 
			require_once './classes/cabecera.class.php';
			require_once './classes/xmlFiles.class.php';
			
			$cabecera_contenidos = new cabecera($xml->getXMLFicheroCabecera());
?>	

		
		<?php include 'metas.php'?>
		
		<title><?php echo $cabecera_contenidos->getTitleWeb() ?></title>
		
		<link rel="shortcut icon" href="/img/favicon_gala2.ico" />
		
		<?php include 'css.php'?>
		
		<?php include 'js.php'?>
		

