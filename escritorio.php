<?php

	function getFotografias($imagenes){
		global $enlaces;
		global $cabecera_contenidos;
		$menu_fotos = $imagenes;
		$arrChinchetas = array("chincheta_amarilla_ajustada.png",
							"chincheta_azul_ajustada.png",
							"chincheta_naranja_ajustada.png",
							"chincheta_roja_ajustada.png",
							"chincheta_verde_ajustada.png",
							"chincheta_violeta_ajustada.png");
		$i = 0;
		
		foreach($menu_fotos as $foto){
			$i++;
			$j = 0;
			$enlace = $foto->enlace;
			$j++;
			$ruta_imagen = "/img/".$arrChinchetas[rand(0, count($arrChinchetas) - 1)];
			$enl = "<div id=\"foto_".$enlace->id."\" class=\"foto\" onclick=\"fotoClick('foto_".$enlace->id."', '".$enlace->id."','".$enlace->idPadre."')\">";
			$enl .= "<img class=\"chincheta ctc\" src=\"".$ruta_imagen."\" title=\"".$cabecera_contenidos->getImgDecorativa()."\" alt=\"".$cabecera_contenidos->getImgDecorativa()."\"/>";
			$enl .= "<img class=\"foto_img\" src=\"".$foto->img."\" title=\"".$foto->title."\" alt=\"".$foto->alt."\"/>";
			$enl .="</div>";
			echo $enl;
			}
			
		}
?>
<!-- <div id="marcador" style="background-color: white; width: 200px;"></div>-->
<div id="escritorio">
	<div id="txt_escritorio" class="postit"></div>
	<?php getFotografias($xml->getXMLFicheroImagenes())?>
</div>
<div id="escritorio_galeria">

</div>