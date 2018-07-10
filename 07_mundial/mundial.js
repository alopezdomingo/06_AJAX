$(document).ready(inicio);

function inicio()
{
	$("#grupos").change(rellenarSelecciones);
}
function rellenarSelecciones()
{
	var gr = $("#grupos option:selected").val();
	if (gr != "no")
	{
		$("#selecciones").html("");
		$.getJSON("selecciones.php",{grupo:gr},rellenar);
	}
}
function rellenar(datos)
{
	for (var i=0;i<datos.length;i++)
	{
		$("<option>"+datos[i].seleccion+"</option>").appendTo("#selecciones");
	}
}