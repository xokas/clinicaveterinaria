<?php
	require_once './classes/xmlFiles.class.php';
			
	$enlaces = $xml->getXMLFicheroMenu()->enlace;
	
	function getMenu(){
		global $enlaces;
		$menu_enlaces = $enlaces;
		$i = 0;
		foreach($menu_enlaces as $enlace){
			$i++;
			$j = 0;
			//echo "<li><img data-frame='".$imagen->dataFrame."' src='".$imagen->src."' title='".$imagen->title."' data-description='".$imagen->dataDescription."' /></li>";
			$enl = "<li class=\"postit pNOSEL blue\" id=\"".$enlace->id."\">";
			$clickF = "";
			if(isset($enlace->click)){
				$clickF = $enlace->click .";";
			}
			$enl .= "<a id=\"lnk_".$enlace->id."\" href=\"".$enlace->href."\" onclick=\"clickEnlaceMenu('".$enlace->id."');".$clickF."\">".$enlace->texto."</a>";
			$menu_sec = $enlace->submenu->enlace;
			$enl .="<ul id=\"menuSub_".$enlace->id."\" class=\"menu_sec\">";
			if($menu_sec != null){
				foreach($menu_sec as $enlace_sec){
					$j++;
					$enl .= "<li class=\"postit orange\" id=\"".$enlace_sec->id."\">";
					$enl .= "<a id=\"lnk_".$enlace_sec->id."\" href=\"".$enlace_sec->href."\" onclick=\"enlaceClick('foto_".$enlace_sec->id."','".$enlace_sec->id."','".$enlace->id."');\">".$enlace_sec->texto."</a>";
					$enl .= "</li>";
				}
			}
			$enl .="</ul>";
			$enl .= "</li>";
			echo $enl;
		}
	}
?>
	<div id="menu_ppal">
		<ul class="menu_ppal_listado">
			<?php getMenu()?>
		</ul>
	</div>