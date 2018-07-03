$(document).ready(inicio);

function inicio()
{
	$("#btn").click(envioFormu);
}
function envioFormu()
{
	var m = $("#matricula").prop("value");
	$.getJSON("consultarII.php",{m:m},muestra);
	return false;
}
function muestra(resultado)
{
	if (resultado.modelo=='No')
	{
		$("#datos").html("Coche inexistente");
	}
	else
	{
		$("#datos").html("Marca: " + resultado.marca + "<br>Modelo: " + resultado.modelo + "<br>Km: " + resultado.km);
	}
}
