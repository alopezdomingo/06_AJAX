$(document).ready(iniciar)

function iniciar(){
	$("#provin").change(verMunicipios);
}
function verMunicipios(){
	//alert("EStás entrando en la funcion");
	var idp =$("#idprovincia").prop("value");
	$.getJSON("buscadorMuni.php",{idp:idp}, datos);
	return false;
}
function datos(ver){
	//$("#datos").html("");
	//$("<p>"+ver.poblacion+"</p>").appendTo("#datos");
	alert("Estás entrando en la función");
	$("<p>FUNCIONA</p>").appendTo("#datos");
	$("<option>"+ver.poblacion+"<option>").appendTo("#datos");
	 
}