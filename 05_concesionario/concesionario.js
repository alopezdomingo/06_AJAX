$(document).ready(iniciar)

function iniciar(){
	$("#btn").click(verCoches);
}
function verCoches(){
	var m = $("#matricula").prop("value");
	$.getJSON("concesionario.php",{m:m},muestra);
	return false;
}
function muestra(ver){
	$("#datos").html("");
	if(typeof ver.matricula != "undefined")
	{
		$("<p>"+ver.matricula+"</p>").appendTo("#datos");
		$("<p>"+ver.Marca+"</p>").appendTo("#datos");
		/*	$("#datos").html(ver.Modelo);
		$("#datos").html(ver.Precio);
		$("#datos").html(ver.Km);*/
	
	}
	else{
		$("#datos").html("no existe ese vehículo");
	}
	/*if  (ver.modelo=='No')
	{
		$("#datos").html("Coche inexistente");
	}
	else{
		$("#datos").html($);
	}*/
}
  