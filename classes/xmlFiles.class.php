<?php
require_once ('./classes/configuracion.class.php');
session_start();

class xmlFiles {

	private $configuracion;
	private $numVersion;
	
	public function xmlFiles($cadena, $language){
		$this->configuracion = unserialize($_SESSION[$cadena]);
		$this->configuracion->setIdioma($language);
		$this->numVersion = $this->getXMLFicheroVersion()->numero;
	}

	public function getXMLFicheroVersion(){
		return simplexml_load_file($this->configuracion->getFicheroVersion());
	}
	public function getXMLFicheroMenu(){
		return simplexml_load_file($this->configuracion->getFicheroMenu());
	}
	public function getXMLFicheroContenidos(){
		return simplexml_load_file($this->configuracion->getFicheroContenidos());
	}
	public function getDOMFicheroContenidos(){
		$doc = new DomDocument;
		$doc->validateOnParse = true;
		$doc->load($this->configuracion->getFicheroContenidos());
		return $doc;
		
	}
	public function getXMLFicheroCuriosidades(){
		return simplexml_load_file($this->configuracion->getFicheroCuriosidades());
	}
	public function getXMLFicheroCabecera(){
		return simplexml_load_file($this->configuracion->getFicheroCabecera());
	}
	public function getXMLFicheroImagenes(){
		return simplexml_load_file($this->configuracion->getFicheroImagenes());
	}
	public function getXMLFicheroGaleria(){
		return simplexml_load_file($this->configuracion->getFicheroGaleria());
	}
	function getVersion($url){	
	    echo $url."?".$this->numVersion;
	}
}
?>