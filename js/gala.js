
//& # ; < > a h r e f / = ' 0 1 2 3 4 5 6 7 8 9 
//z y x w v u t s r q p o n m l k j i h g f e d c b a
//http://norfipc.com/articulos/esconder-email.html

//0 1 2 3 4 5 6 7 8 9 ;&# &# ;'> ;</a> <a href='
//z y x w v u t s r q p   o  n   m     l           //k j i h g f e d c b a
var contacto = "<a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#118;&#101;&#116;&#101;&#114;&#105;&#110;&#97;&#114;&#105;&#97;&#103;&#97;&#108;&#97;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;'>&#99;&#118;&#101;&#116;&#101;&#114;&#105;&#110;&#97;&#114;&#105;&#97;&#103;&#97;&#108;&#97;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>";
var contacto_encode = "loyzqpqspyzupyzrpyytpyyypurpqqpyyrpyzypyytpyzypyyvpyzupyyzpqspyyvpyzupqspyzwpqspyzrpqsptvpyzwpyzqpqspyzupyzrpvtpqqpyyypyzqnoqqpyyrpyzypyytpyzypyyvpyzupyyzpqspyyvpyzupqspyzwpqspyzrpqsptvpyzwpyzqpqspyzupyzrpvtpqqpyyypyzqm";
var webmaster = "<a href='&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#99;&#118;&#101;&#116;&#101;&#114;&#105;&#110;&#97;&#114;&#105;&#97;&#103;&#97;&#108;&#97;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;'>&#99;&#118;&#101;&#116;&#101;&#114;&#105;&#110;&#97;&#114;&#105;&#97;&#103;&#97;&#108;&#97;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;</a>";
var webmaster_encode = "loyzqpqspyzupyzrpyytpyyypurpqqpyyrpyzypyytpyzypyyvpyzupyyzpqspyyvpyzupqspyzwpqspyzrpqsptvpyzwpyzqpqspyzupyzrpvtpqqpyyypyzqnoqqpyyrpyzypyytpyzypyyvpyzupyyzpqspyyvpyzupqspyzwpqspyzrpqsptvpyzwpyzqpqspyzupyzrpvtpqqpyyypyzqm";

var lang = "es";

function codificar(informacion, capa){
	if(document.getElementById(capa)){
		 var textos =  new Array("z",        "y","x","w","v","u","t","s","r","q","p","o",  "n",  "m",  "l");
		 var codigos = new Array("0","1","2","3","4","5","6","7","8","9",";&#","&#",";'>",";</a>", "<a href='");
		 
		for(var i = 0 ; i < textos.length; i++){
			var e = new RegExp(codigos[i],"g");
			informacion = informacion.replace(e, textos[i]);
		}
		
		document.getElementById(capa).innerHTML = informacion;
	}
}

function descodificar(informacion, capa){
	if(document.getElementById(capa)){
		var codigos =  new Array("z",        "y","x","w","v","u","t","s","r","q","p","o",  "n",  "m",  "l");
		var textos  =  new Array("0","1","2","3","4","5","6","7","8","9",";&#","&#",";'>",";</a>","<a href='");
		 
		for(var i = 0 ; i < textos.length; i++){
			var e = new RegExp(codigos[i],"g");
			informacion = informacion.replace(e, textos[i]);
		}
		document.getElementById(capa).innerHTML = informacion;
	}
}

function encodeEmail(texto, capa){
	var linkEmail = "mailto:" + texto.toLowerCase();
	var encodedLink = "";

	for (i = 0; i < linkEmail.length; i++){
		encodedLink += "&#" + linkEmail.charCodeAt(i) + ";";
	}
	//alert(encodedLink);
	document.getElementById(capa).innerHTML = encodedLink;
}
/*$(document).ready(function(){});*/
function inicio(language){
	//encodeEmail("contacto@cveterinariagala.com", "correo_contacto")
	//codificar("correo_contacto");
	descodificar(contacto_encode, "correo_contacto");
	descodificar(webmaster_encode, "correo_webmaster");
	/** INICIALIZAR MENU **/
	inicializarMenu();
	colocarFotos();
	lang = language;
}
/**********/
/** MENU **/
/**********/

/* variables globales del men� */
var idMenuSubDesp = "";
var arrMenu       = new Array();
var arrPosition   = new Array();
var arrCoord      = new Array();
var carruselMov  = false;

function inicializarMenu(){
	maxWidth = $("#escritorio").css("width");
    minWidth = 120;	
    cargarArraysMenu();
    $(arrMenu[0]).removeClass("pNOSEL");
	$(arrMenu[0]).addClass("pSEL");
	desplegarMenuSecundario(arrMenu[0]);
}
function clickEnlaceMenu(id){
		carruselMov = false;
		if(idMenuSubDesp != "" && idMenuSubDesp != ("#" + id)) replegarMenu(idMenuSubDesp, id);
		else carruselMenu(id);		
		getTextoCuriosidades();
		if(galeriaDesplegada)ocultarGaleria();
}
function desplegarMenuSecundario(capa){
	var topCoord = $(capa).css("top");

	//var id = capa.substring(capa.length-1, capa.length);
	idMenuSub = $(capa).attr("id");
	idMenuSubDesp = "#" + idMenuSub;
    desplegarMenu("#menuSub_" + idMenuSub);
    $("#menuSub_" + idMenuSub).css({"display":"block"});
    
}
function desplegarMenu(idMenuSub){
	//var posLeft = $("#menu_ppal").css("width");
	
	var posRight = $("#menu_ppal").css("width");
	maxWidth = $("#escritorio").css("width");
	maxWidth = (parseFloat(maxWidth.substring(0, maxWidth.length - 2))) + "px";
	posRight = (0 - parseFloat(maxWidth.substring(0, maxWidth.length - 2))) + "px";
    //$(idMenuSub).css({left : posLeft});
	$(idMenuSub).css({right : posRight});
    $(idMenuSub).animate({width: maxWidth}, 800);
    $(idMenuSub + " li").animate({"margin-right":"5px"}, 800, 
    	function(){ 
	    	var h = $(idMenuSub).css("height");
	    	//document.getElementById("marcador").innerHTML = h + " - " + idMenuSub;
	    	$("#escritorio").css({marginTop : h});
    });
    
    //$(#escritorio).css(marginBottom: )
}
function replegarMenu(idMenuSub, id){
    $(idMenuSub).css({left : 0}).animate({paddingRight: 0}, 300, 
    		function(){
				carruselMenu(id);
			});
    $(idMenuSub + " li").animate({"margin-right":"1500px"}, 300);
    $(idMenuSub + " ul").animate({"width":"0"}, 300);
    $(idMenuSub + " ul").css({"display":"none"});
}
function cargarArraysMenu(){
	var i = 0;
	$('ul.menu_ppal_listado > li').each(function(){
		arrMenu[i++] = "#" + $(this).attr('id');
	});
	var numMenus = i;
	for(var i = 0; i < numMenus; i++){
		arrPosition[i] = "0px";
		arrCoord[i] = (i * (-38)) + "px"; 
	}
}
/*var arrMenu =     new Array("#menu_1", "#menu_2", "#menu_3", "#menu_4", "#menu_5");
var arrPosition = new Array("0px","0px","0px","0px","0px");
var arrCoord =    new Array("0px", "-38px", "-76px", "-114px", "-152px");*/

function carruselMenu(id){
	var capa = "#" + id; 
	if(!carruselMov){
		moverCarrusel(capa);
	}
}

function moverCarrusel(capa){
	if(capa != arrMenu[0]){
		carruselMov = true;
		var arrMenuAux = new Array();
		moverCoordenadas(capa);
		arrMenuAux = arrMenu.slice();

		arrMenu.push(arrMenu[0]);
		arrMenu.splice(0,1);
		arrCoord.push(arrCoord[0]);
		arrCoord.splice(0,1);
		arrPosition.push(arrPosition[0]);
		arrPosition.splice(0,1);
		for(var i = 0; i < arrMenu.length; i++){
			$(arrMenu[i]).animate({"top" : arrPosition[i]}, 200,
					function(){
						$(arrMenuAux[0]).css({zIndex : "1"});
						$(arrMenuAux[0]).removeClass("pSEL");
						$(arrMenuAux[0]).addClass("pNOSEL");
						//$(arrMenuAux[0] + "_span").html($(arrMenuAux[0]).css("z-index"));
						$(arrMenuAux[1]).css({zIndex : "0"});
						$(arrMenuAux[1]).removeClass("pNOSEL");
						$(arrMenuAux[1]).addClass("pSEL");
						//$(arrMenuAux[1] + "_span").html($(arrMenuAux[1]).css("z-index"));
						if(capa == arrMenuAux[1]) desplegarMenuSecundario(capa);
						else moverCarrusel(capa);
					});
		}
		
	}else{
		carruselMov = false;
	}
}
function moverCoordenadas(capa){
	for(i = 0; i < arrMenu.length; i++){
		var capa = arrMenu[i];
		topCoord = arrPosition[i];
		var cantidad = 0;
		if(topCoord == arrCoord[i]){
			cantidad = 38 * (arrMenu.length - 1);
		}else{
			cantidad = -38;
		}
		topCoord = topCoord.substring(0, topCoord.length -2);
		topCoord = new Number(topCoord) + cantidad;
		topCoord = topCoord + "px";
		arrPosition[i] = topCoord;
	}
}
/***********************/
/** FOTOS Y CONTENIDO **/
/***********************/
var desplegado = true;
function limpiarEscritorio(idFoto){
	desplegado = false;
	$(".foto").animate({top : "15px", left : "0px"}, 500);
	$(".foto").css({zIndex : 1});
	$("#" + idFoto).css({zIndex : 9});
	fotoMostrada = idFoto;
	$("#escritorio").animate({minHeight : "110px"}, 500);
}
var fotoMostrada;

function fotoClick(id, idEnlace, idMenuSup){
	if(desplegado){
		clickEnlaceMenu(idMenuSup);
		limpiarEscritorio(id);
		displayTxtEscritorio(idEnlace);
	}else{
		//$("#" + id).css({zIndex : 9});
		colocarFotosAnimacion();
		ocultarTxtEscritorio();
	}
	getTextoCuriosidades();
}
function enlaceClick(id, idEnlace, idMenuSup){
	if(desplegado){
		clickEnlaceMenu(idMenuSup);
		limpiarEscritorio(id);
	}else if(id != fotoMostrada){
		colocarFotoIndividual(id);
		fotoMostrada = id;
	}
	displayTxtEscritorio(idEnlace);
	getTextoCuriosidades();
}
function clickMapa(){
	colocarMapaAnimacion();
	ocultarTxtEscritorio();
}
function colocarFotos(){
	desplegado = true;
	var distLeft = $("#escritorio").css("width");
	distLeft = distLeft.substring(0, distLeft.length - 2) / 5;
	var j = 0;
	var z = 0;
	var altura = 5;
	var topArray = new Array();
	var rotateArray = new Array();
	for(i = 0; i < 5; i++){
		topArray[i] = topAleatorio(115 * z) + "px";
		var valor = Math.floor((Math.random()*30)+345);
		if (valor > 360) valor -= 360;
		valor += "deg";
		rotateArray[i] = valor;
	}
	$(".foto").each(function(){
		if(j>=5){j=0;altura--;/*z++ solo una fila*/};
		var idcapa = "#" + $(this).attr('id');
		/*$(idcapa).css({left : (distLeft * j++) + "px", top : topAleatorio(115 * z) + "px"});*/
		$(idcapa).css({left : (distLeft * j) + "px", top : topArray[j]});
		/*$(idcapa).animate({left : (distLeft * j++) + "px", top : (115 * z) + "px"},500);*/
		$(idcapa).css({"z-index" : altura});
		rotationAleatorio(idcapa, rotateArray[j]);
		j++;
	});
	$("#escritorio").css({minHeight : (++z * 110) + "px"});
	
}
function colocarFotosAnimacion(){
	desplegado = true;
	var distLeft = $("#escritorio").css("width");
	distLeft = distLeft.substring(0, distLeft.length - 2) / 5;
	var j = 0;
	var z = 0;
	var altura = 5;
	var topArray = new Array();
	var rotateArray = new Array();
	for(i = 0; i < 5; i++){
		topArray = topAleatorio(115 * z) + "px";
		var valor = Math.floor((Math.random()*30)+345);
		if (valor > 360) valor -= 360;
		valor += "deg";
		rotateArray[i] = valor;
	}
	$(".foto").each(function(){
		if(j>=5){j=0;altura--;/*z++ solo una fila*/};
		var idcapa = "#" + $(this).attr('id');
		/*$(idcapa).css({left : (distLeft * j++) + "px", top : (115 * z) + "px"});*/
		/*$(idcapa).animate({left : (distLeft * j++) + "px", top : topAleatorio(115 * z) + "px"},500);*/
		$(idcapa).animate({left : (distLeft * j) + "px", top : topArray[j]},500);
		$(idcapa).css({"z-index" : altura});
		rotationAleatorio(idcapa, rotateArray[j]);
		j++;
	});
	$("#escritorio").animate({minHeight : (++z * 110) + "px"}, 500);
}
function colocarMapaAnimacion(){
	desplegado = true;
	var distLeft = $("#escritorio").css("width");
	distLeft = distLeft.substring(0, distLeft.length - 2) / 5;
	var j = 0;
	var z = 0;
	var altura = 5;
	var topArray = new Array();
	var rotateArray = new Array();
	for(i = 0; i < 5; i++){
		topArray = topAleatorio(115 * z) + "px";
		var valor = Math.floor((Math.random()*30)+345);
		if (valor > 360) valor -= 360;
		valor += "deg";
		rotateArray[i] = valor;
	}
	$(".foto").each(function(){
		if(j>=5){j=0;altura--;z++;};
		var idcapa = "#" + $(this).attr('id');
		$(idcapa).animate({left : (distLeft * j) + "px", top : topAleatorio(145 * z) + "px"},500);
		$(idcapa).css({"z-index" : altura});
		rotationAleatorio(idcapa, rotateArray[j]);
		j++;
	});
	$("#escritorio").animate({minHeight : (++z * 145) + "px"}, 500);
	//$("#escritorio").css({marginTop:0});
}
var incrZIndex = 10;
function colocarFotoIndividual(id){
	var distLeft = $("#escritorio").css("width");
	distLeft = distLeft.substring(0, distLeft.length - 2) / 5;
	$("#" + id).animate({left : distLeft + "px", top : topAleatorio(15) + "px"},500, (function(){$("#" + id).css({zIndex : incrZIndex++})})).animate({top : "15px", left : "0px"}, 500);
}
function rotationAleatorio(idcapa, valor){
	
	valorRotate = "rotate(" + valor + ")"; 
	$(idcapa).css({
		rotation: valor,
		"-moz-transform": valorRotate,
		"-webkit-transform": valorRotate,
		"-ms-transform": valorRotate,
		"-o-transform": valorRotate
	});
}
function topAleatorio(valorTop){
	var valor = Math.floor(Math.random()*20);
	return (valorTop + valor);
}
function displayTxtEscritorio(id){
	var maxW = $("#escritorio").css("width");
	var mgLef = $("#txt_escritorio").css("margin-left");
	maxW = maxW.substring(0, maxW.length -2);
	mgLef = mgLef.substring(0, mgLef.length - 2);
	maxW = parseFloat(maxW) - parseFloat(mgLef) - (6 * parseFloat(maxW) / 100);
	$("#txt_escritorio").animate({width: maxW, minHeight: 70}, 500, function(){$('#txt_escritorio').css("height", "");});
	
	getTextoContenido(id);
}
function ocultarTxtEscritorio(){
	$("#txt_escritorio p").fadeOut(500);
	$("#txt_escritorio h5").fadeOut(500);
	$("#txt_escritorio div").fadeOut(500);
	$("#txt_escritorio").animate({width: 0, height: 0},500);
	
}
function mostrarComentarioMas(actual,total){
	var cambio = actual;
	if(total != cambio){
		cambio++;
	}else{
		cambio = 1;
	}
	mostrarComentario(actual, cambio);
}
function mostrarComentarioMenos(actual){
	var cambio = actual;
	if(cambio != 1){
		cambio--;
	}else{
		cambio = 9;
	}
	mostrarComentario(actual, cambio);
}
function mostrarComentario(actual, cambio){
	$("#coment_" + actual).fadeOut();
	$("#coment_" + actual + " p").fadeOut(function(){
		$("#coment_" + cambio).fadeIn("slow");
		$("#coment_" + cambio + " p").fadeIn("slow");
	});
}
var galeriaDesplegada = false;
function clickGaleria(){
	galeriaDesplegada = true;
	colocarFotosAnimacion();
	ocultarTxtEscritorio();
	getGaleria();
	
}
function colocarGaleriaAnimacion(){
	var distLeft = $("#escritorio_galeria").css("width");
	distLeft = distLeft.substring(0, distLeft.length - 2) / 5;
	var j = 0;
	var z = 0;
	var altura = 5;
	var topArray = new Array();
	var rotateArray = new Array();

	for(i = 0; i < 5; i++){
		topArray = topAleatorio(115 * z) + "px";
		var valor = Math.floor((Math.random()*30)+345);
		if (valor > 360) valor -= 360;
		valor += "deg";
		rotateArray[i] = valor;
	}
	$(".foto_galeria").each(function(){
		if(j>=5){j=0;altura--;z++;};
		var idcapa = "#" + $(this).attr('id');
		$(idcapa).animate({left : (distLeft * j) + "px", top : topAleatorio(145 * z) + "px"},500);
		$(idcapa).css({"z-index" : altura});
		rotationAleatorio(idcapa, rotateArray[j]);
		j++;
	});
	$("#escritorio_galeria").animate({minHeight : (++z * 145) + "px"}, 500);
}
function ocultarGaleria(){
	var galeriaDesplegada = false;
	$("#escritorio_galeria").fadeOut(function(){
		$("#escritorio").fadeIn();
	});	
}
var fotoAmpliadaId = "";
var posAntTop = "";
var posAntLeft = "";
function fotoGaleriaClick(numberId){
	/*TODO:
	 * colocar la foto ampliada en el entro horizontal y en el top vertical del escritorio
	 * guardar las coordenadas originales de posición
	 * devolver la foto a su posición original cuando se reduce.
	*/
	var posWidth = $("#escritorio_galeria").css("width");
	var posTop = "0";
	var posLeft = "20%";
	
	if(fotoAmpliadaId != ""){
		$("#foto_galeria" + fotoAmpliadaId).animate({width: "150px", top: posAntTop, left: posAntLeft}, 400);
		$("#foto_galeria_img" + fotoAmpliadaId).animate({width: "150px"}, 400, function(){
			$(this).parent().css('z-index', 2);
		});
		//document.getElementById("foto_galeria" + fotoAmpliadaId).style.zIndex="0";	
	}
	if(fotoAmpliadaId != numberId){
		document.getElementById("foto_galeria" + numberId).style.zIndex="99";
		posAntTop = $("#foto_galeria" + numberId).css("top");
		posAntLeft = $("#foto_galeria" + numberId).css("left");
		$("#foto_galeria" + numberId).animate({width: "400px", top: "0", left: "150"}, 400);
		$("#foto_galeria_img" + numberId).animate({width: "400px"}, 400);
		fotoAmpliadaId = numberId;
	}else if(fotoAmpliadaId == numberId){
		fotoAmpliadaId = "";
	}
	
}
