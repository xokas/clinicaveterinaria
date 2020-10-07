<?php 
			require_once './classes/cabecera.class.php';
			require_once './classes/xmlFiles.class.php';
			
			$cabecera_contenidos = new cabecera($xml->getXMLFicheroCabecera());
?>	
<div id="cabecera" itemscope itemtype="http://data-vocabulary.org/Organization">
	<div id="cab_ppal">
		<div id="logo" class="postit tit">
			<a href="/"><img src="/img/logos/logo2.2_trans.png" alt="<?php echo $cabecera_contenidos->getTitleWeb() ?>" title="<?php echo $cabecera_contenidos->getTitleWeb() ?>"/></a>
		</div>
		<div id="titulo" class="postit tit">
			<h1 itemprop="name"><?php echo $cabecera_contenidos->getTitulo()?></h1>
			<img class="chincheta ctl" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta ctr" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cbl" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cbr" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
		<div id="subtitulo" class="postit tit">
			<h2><?php echo $cabecera_contenidos->getSubtitulo()?></h2>
			<img class="chincheta cmr" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cml" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
	</div>
	<div id="cab_sec">
		<div id="mail" class="postit blanco">
			<h3 id="correo_contacto"></h3>
			<img class="chincheta cmr" src="/img/chincheta_roja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cml" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
		<div id="telefonos" class="postit blanco">
			<h3>
				<span itemprop="tel"><?php echo $cabecera_contenidos->getTelefonoFijo()."</span> - <span itemprop='tel'>".$cabecera_contenidos->getTelefonoMovil()?></span>
			</h3>
			<img class="chincheta ctc" src="/img/chincheta_roja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
		<div id="direccion" class="postit blanco" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
			<h3>
				<span itemprop="street-address"><?php echo $cabecera_contenidos->getDireccion()->getVia()?></span> 
				<?php echo $cabecera_contenidos->getDireccion()->getCodigoPostal()?>
				<span itemprop="locality"><?php echo $cabecera_contenidos->getDireccion()->getLocalidad()?></span>
				<span itemprop="region"><?php echo $cabecera_contenidos->getDireccion()->getProvincia()?></span>
			</h3>
			<img class="chincheta ctl" src="/img/chincheta_roja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta ctr" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cbl" src="/img/chincheta_naranja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
			<img class="chincheta cbr" src="/img/chincheta_naranja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		</div>
	</div>
	<div id="enlaces_sociales">
		<ul>
			<li><a href="https://www.facebook.com/cveterinariagala" target="_blank"><img src="/img/facebook5.jpg" alt="facebook" title="Facebook"/></a></li>
		</ul>
	</div>
	<div id="presentacion" class="postit blanco">
		<p><?php echo $cabecera_contenidos->getTextoPresentacion()?></p>
	    <img class="chincheta ctl" src="/img/chincheta_verde_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		<img class="chincheta ctr" src="/img/chincheta_azul_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		<img class="chincheta cbl" src="/img/chincheta_roja_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
		<img class="chincheta cbr" src="/img/chincheta_violeta_ajustada.png" title="<?php echo $cabecera_contenidos->getImgDecorativa() ?>" alt="<?php echo $cabecera_contenidos->getImgDecorativa() ?>"/>
	</div>
	<span class="geo">
	   <span class="latitude">
	      <span class="value-title" title="43,28377" ></span>
	   </span>
	    <span class="longitude">
	      <span class="value-title" title="-8,20800"></span>
	   </span>
    </span>
</div>