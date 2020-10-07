<?php
	$version= simplexml_load_file('../contenidos/version.xml');
    $ver = $version->numero;
    
    global $ver;
	    
	function version($url){	
    	global $ver;
	    echo $url."?".$ver;
	}
	$error = $_GET["e"];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include '../head_construccion.php';?>
	</head>
	<body onload="inicio()">
		<div id="marco_sup" class="marco">
			<div id="marco_tl" class="marco_lateral"></div>
			<div class="marco_horizontal"></div>
			<div id="marco_tr" class="marco_lateral"></div>
		</div>
		<div class="contenido">
			<div id="marco_izq" class="marco_lateral"></div> 
			<div class="corcho">
				<div id="cabecera" class="construccion">
					<div id="cab_ppal">
						<div id="logo" class="postit tit blanco">
							<img src="/img/logos/LogoColorNoText.png"  alt="Consulta Veterinaria Gala" title="Consulta Veterinaria Gala"/>
						</div>
						<div id="titulo" class="postit tit">
							<h1>GALA</h1>
						</div>
						<div id="subtitulo" class="postit tit">
							<h2>Consulta Veterinaria</h2>
						</div>
						<div id="mensaje_error" class="postit blanco">
							<?php include $error.".php"?>
							
							¿Quiere volver a la <a href="/">portada</a>?
						</div>
					</div>
					<div id="cab_sec">
						<div id="mail" class="postit blanco">
							<h3 id="correo_contacto"></h3>
						</div>
						<div id="telefonos" class="postit blanco">
							<h3>696 949 087 - 981 775 203</h3>
						</div>
						<div id="direccion" class="postit blanco">
							<h3>C/ Saavedra Meneses, 52. Bajo Izq. <br/>15300 Betanzos, A Coru&ntilde;a</h3>
						</div>
					</div>
				</div>
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
			<?php include '../pie.php';?>
		</div>
	</body>
</html>



