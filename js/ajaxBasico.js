function getHTTPObject() {
  var xmlhttp;
  if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
    try {
      xmlhttp = new XMLHttpRequest();
    } catch (e) {
      xmlhttp = false;
    }
  }
  return xmlhttp;
}

var http = getHTTPObject();

/*

function enviar1(){
	var par = "var1=hola&var2=mundo! a patín!";
	var url = "server/post.php";
	var ajax = getXMLHttpRequest();
	ajax.open("POST",url,true);
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded; charset=UTF-8");
	ajax.onreadystatechange = respuesta;
	ajax.send(par);

	function respuesta(){
		if (ajax.readyState==4){
			if (ajax.status==200){
				alert(ajax.responseText);
			}else{
				alert("Error al recibir la información!")
			}
		}
	}
}
 * 
 * */
