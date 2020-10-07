var httpGetTextoCuriosidades = getHTTPObject();
function getTextoCuriosidades(){
	var url = "/curiosidades_textos.php?lang=" + lang;
	$('#texto_curiosidades').fadeOut('slow', function() {
		httpGetTextoCuriosidades.open("GET", url, true);
		httpGetTextoCuriosidades.onreadystatechange = rHTML_getTextoCuriosidades;
		httpGetTextoCuriosidades.send(null);
     });
	
}
function rHTML_getTextoCuriosidades(){
	if (httpGetTextoCuriosidades.readyState == 4) {
	    if (httpGetTextoCuriosidades.status == 200) {
	    	document.getElementById('texto_curiosidades').innerHTML = httpGetTextoCuriosidades.responseText;
	      $('#texto_curiosidades').fadeIn('slow', function() {});
	    }
	}
}
var httpGetTextoContenido = getHTTPObject();

function getTextoContenido(idTxt){
	var url = "/contenido_textos.php?idTxt=" + idTxt + "&lang=" + lang;
	httpGetTextoContenido.open("GET", url, true);
	httpGetTextoContenido.onreadystatechange = rHTML_getTextoContenido;
	httpGetTextoContenido.send(null);
	
}
function rHTML_getTextoContenido(){
	if (httpGetTextoContenido.readyState == 4) {
	    if (httpGetTextoContenido.status == 200) {
	    	document.getElementById('txt_escritorio').innerHTML = httpGetTextoContenido.responseText;
	      $('#txt_escritorio p').fadeIn(1500, function() {});
	      $('#txt_escritorio h5').fadeIn(1500, function() {});
	      $('#txt_escritorio div').fadeIn(1500, function() {});
	    }
	}
}
var httpGetGaleria = getHTTPObject();
function getGaleria(){
	var url = "/galeria.php?lang=" + lang;
	httpGetGaleria.open("GET", url, true);
	httpGetGaleria.onreadystatechange = rHTML_getGaleria;
	httpGetGaleria.send(null);
	
}
function rHTML_getGaleria(){
	if (httpGetGaleria.readyState == 4) {
	    if (httpGetGaleria.status == 200) {
	    	document.getElementById('escritorio_galeria').innerHTML = httpGetGaleria.responseText;
	    	$("#escritorio").fadeOut(function(){
	    		$("#escritorio_galeria").fadeIn(function(){
	    			colocarGaleriaAnimacion();
	    		});
	    	});
	    }
	}
}

