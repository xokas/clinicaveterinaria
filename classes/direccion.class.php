<?php
class direccion{

	protected $via;
	protected $codigo_postal;
	protected $localidad;
	protected $provincia;
	
	/**
	 * Constructor
	 * @param string $nombreFichero
	 */
	public function direccion($file_direccion){
		$this->via = $file_direccion->via;
		$this->codigo_postal = $file_direccion->codigo_postal;
		$this->localidad = $file_direccion->localidad;
		$this->provincia = $file_direccion->provincia;
	}
	
	public function setVia($via){
		$this->via = $via;
	}
	public function setCodigoPostal($codigo_postal){
		$this->codigo_postal = $codigo_postal;
	}
	public function setLocalidad($localidad){
		$this->localidad = $localidad;
	}
	public function setProvincia($provincia){
		$this->provincia = $provincia;
	}
	
	public function getVia(){
		return $this->via;
	}
	public function getCodigoPostal(){
		return $this->codigo_postal;
	}
	public function getLocalidad(){
		return $this->localidad;
	}
	public function getProvincia(){
		return $this->provincia;
	}
}