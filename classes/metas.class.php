<?php
class metas{

	protected $keywords;
	protected $description;
	
	/**
	 * Constructor
	 * @param string $nombreFichero
	 */
	public function metas($file_metas){
		$this->keywords = $file_metas->keywords;
		$this->description = $file_metas->description;
	}
	
	public function setKeywords($keywords){
		$this->keywords = $keywords;
	}
	public function setDescription($description){
		$this->description = $description;
	}
	
	public function getKeywords(){
		return $this->keywords;
	}
	public function getDescription(){
		return $this->description;
	}
}
