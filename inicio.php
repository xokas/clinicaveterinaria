<?php

include './classes/curiosidades.class.php';
include './classes/configuracion.class.php';
include './classes/xmlFiles.class.php';

if(!isset($_SESSION)) {
	session_start();
}
if (!empty($_GET)){
	$idioma = $_GET["lang"];
}else{ 
	$idioma = 'es';
}
$conf = new configuracion('./contenidos/',
							 'version.xml',
							 'menu_gala.xml',
							 'contenidos.xml',
							 'curiosidades.xml',
							 'cabecera.xml',
							 'imagenes.xml',
							 'galeria.xml', $idioma);

$_SESSION["configuracion"] = serialize($conf);

$xml = new xmlFiles("configuracion", $idioma);




?>
<!DOCTYPE HTML>
<html lang="<?php echo $conf->getIdioma() ?>">
<head>
<?php include 'head.php';?>
<script type="text/javascript">
/* descomentar en produccion*/
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34919522-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		
		</script>

</head>
<body onload="inicio('<?php echo $conf->getIdioma() ?>')">
	<div id="marco_sup" class="marco">
		<div id="marco_tl" class="marco_lateral"></div>
		<div class="marco_horizontal">
			<ul class="idiomas <?php echo $conf->getIdioma() ?>">
				<li><a href="/" id="es">Español</a></li>
				<li>|</li>
				<li><a href="/gl/" id="gl">Galego</a></li>
				<li>|</li>
				<li><a href="/en/" id="en">English</a></li>
			</ul>
		</div>
		<div id="marco_tr" class="marco_lateral"></div>
	</div>
	<div class="contenido">
		<div id="marco_izq" class="marco_lateral"></div>
		<div class="corcho">
		<?php include 'contenido.php'?>
		</div>
		<div id="marco_der" class="marco_lateral"></div>
	</div>
	<div class="cl_b"></div>
	<div id="marco_inf" class="marco">
		<div id="marco_bl" class="marco_lateral"></div>
		<div class="marco_horizontal"></div>
		<div id="marco_br" class="marco_lateral"></div>
	</div>
	<div id="pie">
	<?php include 'pie.php';?>
	</div>
</body>
</html>
