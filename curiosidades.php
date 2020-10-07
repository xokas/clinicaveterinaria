<?php
	require_once './classes/xmlFiles.class.php';
			
	$curiosidades = $xml->getXMLFicheroCuriosidades();
	$cur = new curiosidades();
?>

<div id="curiosidades">
	<div id="contenido_curiosidades" class="postit violet">
		<div id="titulo_curiosidades" class="postit violet">
			<h4><?php echo $cabecera_contenidos->getTituloCuriosidades()?></h4>
			<img class="chincheta ctc" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
		<div id="texto_curiosidades">
			<?php 
				$cur = new curiosidades();
				echo $cur->getTextoRandom($curiosidades);
			?>
		</div>
		<img class="refresh cbr" src="/img/refresh.png" title="<?php echo $cabecera_contenidos->getImgRefrescar() ?>" alt="<?php echo $cabecera_contenidos->getImgRefrescar() ?>" onclick="getTextoCuriosidades();"/>
		<img class="chincheta ctl" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/> 
		<img class="chincheta ctr" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		<img class="chincheta cbl" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		<img class="chincheta cbr" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
	</div>
</div>