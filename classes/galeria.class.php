<?php

class galeria {
	protected $fichero;
	protected $locale;

	
	public function setFichero($fichero){
		$this->fichero = $fichero;
	}
	public function setLocale($locale){
		$this->locale = $locale;
	}
	public function getFichero(){
		return $this->fichero;
	}
	public function getLocale(){
		return $this->locale;
	}	
	public function getGaleriaFotos($imagenes){
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
			$enl = "<div  class=\"foto_galeria\" id=\"foto_galeria".$i."\" onclick=\"fotoGaleriaClick(".$i.")\">";
			$enl .= "<img class=\"chincheta ctc\" src=\"".$ruta_imagen."\" ".
						/*"title=\"".$cabecera_contenidos->getImgDecorativa()."\" alt=\"".$cabecera_contenidos->getImgDecorativa().*/
						"\"/>";
			$enl .= "<img id=\"foto_galeria_img".$i."\" class=\"foto_galeria_img\" src=\"".$foto->img."\" title=\"".$foto->txt."\" alt=\"".$foto->txt."\"/>";
			$enl .= "<div class=\"foto_galeria_txt\">".$foto->txt."</div>";
			$enl .="</div>";
			echo $enl;
			}
			
	}
}