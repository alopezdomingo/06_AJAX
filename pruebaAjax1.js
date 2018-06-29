$(document).ready(iniciar)

function iniciar(){
	$(".prov").click(verHabitantes);
	$(".zodiaco").click(verSignosZ);
	$(".signos").click(verFuturoZodiaco);
}
function verHabitantes(){
	var paginaDestino;
	paginaDestino = $(this).attr("href");
	$("#habitantes").load(paginaDestino);
	return false;
}
function verSignosZ(){
	var verPrediccion;
	verPrediccion= $(this).attr("href");
	$("#verPred").load(verPrediccion);
	return false;

}
function verFuturoZodiaco(){
	var elFuturo;
	elFuturo= $(this).attr("href");
	$("#verFuturo").load(elFuturo);
	return false;

}
