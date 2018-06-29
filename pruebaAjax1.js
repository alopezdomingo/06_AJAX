$(document).ready(iniciar)

function iniciar(){
	$(".prov").click(verHabitantes);
	$(".zodiaco").click(verSignosZ);
	$(".zodiaco2").click(verSignosZ2);
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
function verSignosZ2(){
	var verPrediccion2;
	verPrediccion2= $(this).attr("href");
	$("#verPred2").load(verPrediccion2);
	return false;

}
