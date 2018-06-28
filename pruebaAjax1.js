var documento;
documento = $(document);
documento.ready(iniciar);

function iniciar(){
	$("#albacete").click("verHabitantes");
}
function verHabitantes(){
	$("#habitantes").load("provincias.php?codigo=1");
}
