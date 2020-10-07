<?php
require_once './classes/contenido.class.php';
require_once './classes/metas.class.php';
require_once './classes/direccion.class.php';

class cabecera extends contenido {

	protected $title_web;
	protected $metas;
	protected $direccion ;
	protected $titulo;
	protected $subtitulo;
	protected $telefono_fijo;
	protected $telefono_movil;
	protected $img_decorativa;
	protected $img_refrescar;
	protected $titulo_curiosidades;
	protected $texto_presentacion;
	
	/**
	 * Constructor
	 * @param string $nombreFichero
	 */
	public function cabecera($fichero){
		$this->fichero = $fichero;
		$this->title_web = $this->getFichero()->title_web;
		$this->metas =  new metas($this->getFichero()->metas);
		$this->direccion = new direccion($this->getFichero()->direccion);
		$this->titulo = $this->getFichero()->titulo;
		$this->subtitulo = $this->getFichero()->subtitulo;
		$this->telefono_fijo = $this->getFichero()->telefono_fijo;
		$this->telefono_movil = $this->getFichero()->telefono_movil;
		$this->img_decorativa = $this->getFichero()->decoracion->img_decorativa;
		$this->img_refrescar = $this->getFichero()->decoracion->img_refrescar;
		$this->titulo_curiosidades = $this->getFichero()->titulo_curiosidades;
		$this->texto_presentacion = $this->getFichero()->texto_presentacion;
	}
	
	public function setTitleWeb($title_web){
		$this->title_web = $title_web;
	}
	public function setMetas($metas){
		$this->metas = $metas;
	}
	public function setImgDecorativa($img_decorativa){
		$this->img_decorativa = $img_decorativa;
	}
	public function setDireccion($direccion){
		$this->direccion = $direccion;
	}
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	public function setSubtitulo($subtitulo){
		$this->subtitulo = $subtitulo;
	}
	public function setTelefonoFijo($telefono_fijo){
		$this->telefono_fijo = $telefono_fijo;
	}
	public function setTelefonoMovil($telefono_movil){
		$this->telefono_movil = $telefono_movil;
	}
	public function setImgRefrescar($img_refrescar){
		$this->img_refrescar = $img_refrescar;
	}
	public function setTituloCuriosidades($titulo_curiosidades){
		$this->titulo_curiosidades = $titulo_curiosidades;
	}
	public function setTextoPresentacion($texto_presentacion){
		$this->texto_presentacion = $texto_presentacion;
	}
	
	public function getTitleWeb(){
		return $this->title_web;
	}
	public function getMetas(){
		return $this->metas;
	}
	public function getImgDecorativa(){
		return $this->img_decorativa;
	}
	public function getDireccion(){
		return $this->direccion;
	}
	public function getTitulo(){
		return $this->titulo;
	}
	public function getSubtitulo(){
		return $this->subtitulo;
	}
	public function getTelefonoFijo(){
		return $this->telefono_fijo;
	}
	public function getTelefonoMovil(){
		return $this->telefono_movil;
	}
	public function getImgRefrescar(){
		return $this->img_refrescar;
	}
	public function getTituloCuriosidades(){
		return $this->titulo_curiosidades;
	}
	public function getTextoPresentacion(){
		return $this->texto_presentacion;
	}
}