$(document).ready(iniciar)

function iniciar(){
	$("#btn").click(verCoches);
}
function verCoches(){
	var m = $("#matricula").prop("value");
	$.getJSON("concesionario.php",{m:m},muestra);
	return false;
}
function muestra(resultado){
	if  (resultado.modelo=='No')
	{
		$("#datos").html("Coche inexistente");
	}
	else{
		$("#datos").html($reg['matricula']);
	}
}
  