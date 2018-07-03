$(document).ready(inicio);

function inicio()
{
	$(".prov").click(verHabitantes);
}
function verHabitantes()
{
	var paginaDestino;
	paginaDestino = $(this).attr("href");
	$("#habitantes").load(paginaDestino);
	return false;
}