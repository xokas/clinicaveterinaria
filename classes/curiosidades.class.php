<?php
	//session_start();
	
class curiosidades{
	public function getTextoRandom($fichero){
		//$nombreFichero = "./contenidos/curiosidades.xml";
		//$fichero = simplexml_load_file($nombreFichero);
		$textos = $fichero->texto;
		$id = "";
		
		if(isset($_SESSION['idTxt'])){
			$id = $_SESSION['idTxt'];
			do{
				$i = rand(0 , count($textos) - 1);
			}while($id == $textos[$i]->attributes());
		}else{
			$i = rand(0 , count($textos) - 1);
		}
		$id = $textos[$i]->attributes();
		
		
		$_SESSION['idTxt'] = (string)$id;
		
		//return "\n ident: ".$id."\n".$_SESSION['idTxt'];
		//echo $ident." ".$textos[$i]->attributes()." ".var_dump($ident == $textos[$i]->attributes());
		foreach ($textos[$i]->parrafo as $parrafo) {
			echo "<p>".$parrafo."</p>";
		}
	}
}

?>