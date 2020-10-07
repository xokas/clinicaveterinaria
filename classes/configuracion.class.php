<?php

class configuracion {
	
	protected $rutaXML;
	protected $ficheroVersion;
	protected $ficheroMenu;
	protected $ficheroContenidos;
	protected $ficheroCuriosidades;
	protected $ficheroCabecera;
	protected $ficheroImagenes;
	protected $ficheroGaleria;
	protected $numVersion;
	protected $idioma;
	
	/**
	 * Constructor
	 */
	public function configuracion($ruta, $ficheroVersion, $ficheroMenu, $ficheroContenidos, $ficheroCuriosidades, $ficheroCabecera, $ficheroImagenes, $ficheroGaleria, $idioma){
		$this->rutaXML = $ruta;
		$this->ficheroVersion = $this->rutaXML.$ficheroVersion;
		$this->ficheroMenu = $ficheroMenu;
		$this->ficheroContenidos = $ficheroContenidos;
		$this->ficheroCuriosidades = $ficheroCuriosidades;
		$this->ficheroCabecera = $ficheroCabecera;
		$this->ficheroImagenes = $ficheroImagenes;
		$this->ficheroGaleria = $ficheroGaleria;
		$this->idioma = $idioma;
		
    	//
	}
	
	public function setRutaXML($rutaXML){
		$this->rutaXML = $rutaXML;
	}
	public function setFicheroVersion($ficheroVersion){
		$this->ficheroVersion = $ficheroVersion;
	}
	public function setFicheroMenu($ficheroMenu){
		$this->ficheroMenu = $ficheroMenu;
	}
	public function setFicheroContenidos($ficheroContenidos){
		$this->ficheroContenidos = $ficheroContenidos;
	}
	public function setFicheroCuriosidades($ficheroCuriosidades){
		$this->ficheroCuriosidades = $ficheroCuriosidades;
	}
	public function setFicheroCabecera($ficheroCabecera){
		$this->ficheroCabecera = $ficheroCabecera;
	}
	public function setFicheroImagenes($ficheroImagenes){
		$this->ficheroImagenes = $ficheroImagenes;
	}
	public function setFicheroGaleria($ficheroGaleria){
		$this->ficheroGaleria = $ficheroGaleria;
	}
	public function setNumVersion($numVersion){
		$this->numVersion = $numVersion;
	}
	public function setIdioma($idioma){
		$this->idioma = $idioma;
	}
	
	public function getRutaXML(){
		return $this->rutaXML;
	}
	public function getFicheroVersion(){
		return $this->ficheroVersion;
	}
	public function getFicheroMenu(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroMenu;
	}
	public function getFicheroContenidos(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroContenidos;
	}
	public function getFicheroCuriosidades(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroCuriosidades;
	}
	public function getFicheroCabecera(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroCabecera;
	}
	public function getFicheroImagenes(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroImagenes;
	}
	public function getFicheroGaleria(){
		return $this->rutaXML.$this->idioma.'/'.$this->ficheroGaleria;
	}
	public function getNumVersion(){
		return $this->numVersion;
	}
	public function getIdioma(){
		return $this->idioma;
	}
	/*
	public function getXMLFicheroVersion(){
		return simplexml_load_file($this->rutaXML.$this->ficheroVersion);
	}
	public function getXMLFicheroMenu(){
		return simplexml_load_file($this->rutaXML.$this->ficheroMenu);
	}
	public function getXMLFicheroContenidos(){
		return simplexml_load_file($this->rutaXML.$this->ficheroContenidos);
	}
	public function getXMLFicheroCuriosidades(){
		return simplexml_load_file($this->rutaXML.$this->ficheroCuriosidades);
	}
	public function getXMLFicheroCabecera(){
		return simplexml_load_file($this->rutaXML.$this->ficheroCabecera);
	}*/
}