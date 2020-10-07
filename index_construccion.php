<?php
	$version= simplexml_load_file('version.xml');
    $ver = $version->numero;
    
    global $ver;
	    
	function version($url){	
    	global $ver;
	    echo $url."?".$ver;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<?php include 'head_construccion.php';?>
		<script type="text/javascript">

/* descomentar en producción
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-34919522-1']);
		  _gaq.push(['_trackPageview']);
		
		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
*/		
		</script>
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
				<?php include 'contenido_construccion.php'?>
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