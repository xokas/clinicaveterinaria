<?php 
			require_once './classes/cabecera.class.php';
			require_once './classes/xmlFiles.class.php';
			
			$cabecera_contenidos = new cabecera($xml->getXMLFicheroCabecera());
?>	
<div id="cabecera_encerado" itemscope itemtype="http://data-vocabulary.org/Organization">
	<div id="cab_ppal">
		<div id="logo" class="postit tit">
			<a href="/"><img src="/img/logos/logo2.2_trans.png" alt="<?php echo $cabecera_contenidos->getTitleWeb() ?>" title="<?php echo $cabecera_contenidos->getTitleWeb() ?>"/></a>
		</div>
		<div id="titulo_encerado" class="postit_encerado">
			<h1 itemprop="name"><?php echo $cabecera_contenidos->getTitulo()?></h1>
		</div>
		<div id="subtitulo_encerado" class="postit_encerado">
			<h2><?php echo $cabecera_contenidos->getSubtitulo()?></h2>
		</div>
	</div>
	<div id="cab_sec">
		<div id="mail_encerado" class="postit_encerado">
			<h3 id="correo_contacto"></h3>
		</div>
		<div id="telefonos_encerado" class="postit_encerado">
			<h3>
				<span itemprop="tel"><?php echo $cabecera_contenidos->getTelefonoFijo()."</span> - <span itemprop='tel'>".$cabecera_contenidos->getTelefonoMovil()?></span>
			</h3>
		</div>
		<div id="direccion_encerado" class="postit_encerado">
			<h3>
				<span itemprop="street-address"><?php echo $cabecera_contenidos->getDireccion()->getVia()?></span> 
				<?php echo $cabecera_contenidos->getDireccion()->getCodigoPostal()?>
				<span itemprop="locality"><?php echo $cabecera_contenidos->getDireccion()->getLocalidad()?></span>
				<span itemprop="region"><?php echo $cabecera_contenidos->getDireccion()->getProvincia()?></span>
			</h3>
		</div>
	</div>
	<div id="presentacion_encerado" class="postit_encerado">
		<p><?php echo $cabecera_contenidos->getTextoPresentacion()?></p>
	</div>
	<span class="geo">
	   <span class="latitude">
	      <span class="value-title" title="43,28377" ></span>
	   </span>
	    <span class="longitude">
	      <span class="value-title" title="-8,20800"></span>
	   </span>
    </span>
	<div class="marco_horizontal" id="marco_inf_cab"></div>
</div>