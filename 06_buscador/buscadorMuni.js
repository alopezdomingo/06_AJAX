$(document).ready(iniciar)

function iniciar(){
	$("#provin").on("change",verMunicipios);
	$("#datos").hide();
}
function verMunicipios(){
	//alert("EStás entrando en la funcion");
	//var idp =$(".ieja").prop("value");
	$("#datos").html("");
	var idp= $("#provin option:selected").val();
	$.getJSON("buscadorMuni.php",{idp:idp}, datos);
	return false;
}
function datos(ver){
	//$("#datos").html("");
	//$("<p>"+ver.poblacion+"</p>").appendTo("#datos");
	$("<option>Selecciona Población</option>").appendTo("#datos");
	for (var i=0;i<ver.length;i++)
	{
		$("<option>"+ver[i].poblacion+"</option>").appendTo("#datos");
	 }
	$("#datos").fadeIn("2000");

}