$(document).ready(inicio);

function inicio()
{
	$("#btn").click(envioFormu);
}
function envioFormu()
{
	var num1 = $("#num1").prop("value");
	var num2 = $("#num2").prop("value");
	$.get("calcular.php",{n1:num1,n2:num2},muestra);
	return false;
}
function muestra(resultado)
{
	$("#suma").html(resultado);
}