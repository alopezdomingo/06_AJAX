
$(document).ready(inicio);

function inicio(){
	$("#btn").click(function(){
		var n1 = parseFloat($("#num1").prop("value"));
		var n2 = parseFloat($("#num2").prop("value"));
		var suma = n1+n2;
		$("#resultado").html("<h2>El resultado de la suma es: <span style='color:red'> "+suma+" </span></h2>");
	})
}