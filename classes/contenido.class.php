<?php

class contenido {
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
	public function getTexto($doc, $idTxt){
		foreach($doc->getElementById($idTxt)->getElementsByTagName("titulo") as $titnodo){
			echo "<h5>".$titnodo->nodeValue."</h5>";
		}	
		$item = 0;
		$total = $doc->getElementById($idTxt)->getElementsByTagName("texto")->length;
		$multiVar = false;
		foreach($doc->getElementById($idTxt)->getElementsByTagName("multi") as $multi){
			$multiVar = $multi->nodeValue == "true";
		}
		if($multiVar){
			foreach($doc->getElementById($idTxt)->getElementsByTagName("texto") as $nodo){
				if($item == 0){
					$display = "display:block";
				}else{
					$display = "";
				}
				$item++;
				echo "<span class='comentario_consejo' id='coment_".$item."' style='".$display."'>";
				echo "<p>".$nodo->nodeValue."</p>";
				
				echo "<p class='comentario_lnk'><a onclick='mostrarComentarioMenos(".$item.",".$total.")'><<<</a>&nbsp;".$item."/".$total."&nbsp;<a onclick='mostrarComentarioMas(".$item.",".$total.")'>>>></a></p>";
				echo "</span>";
			}
		}else{
			foreach($doc->getElementById($idTxt)->getElementsByTagName("texto") as $nodo){
				echo "<p>".$nodo->nodeValue."</p>";
			}
		}
		if($doc->getElementById($idTxt)->getElementsByTagName("leyenda")){
			echo "<div class='leyenda'>";
			foreach($doc->getElementById($idTxt)->getElementsByTagName("leyenda") as $nodo){
				echo "<p>".$nodo->nodeValue."</p>";
			}
			echo "</div>";	
		}	
	}
}