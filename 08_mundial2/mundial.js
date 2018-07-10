$(document).ready(inicio);

function inicio()
{
	$("#btn").click(enviarNumeros)
}
function enviarNumeros(){
	var n1=$("#num1").prop("value");
	var n2=$("#num2").prop("value");
	alert("Has recogido las variables"+n1+ " " + n2)

	$.ajax({
		url:'sumar.php',
		type 'GET',
		data: '{num1:n1,num2:n2}',
		beforeSend: function(){
			$("#resultado").html("REalizando la operación...");
		}
		success: function (numero){
			$("#resultado").html("Suma: "+ numero)
		}
	})
}
/*function enviarDatos(){
	$.ajax({
		url:'consultar.php',
		type:'GET',
		datatype: 'json',
		data:{grupo:gr},//(key:value, key:value)
		success:funcion,//se lleva a una funcion que programemos (ejemplo: rellenar un select)
		error: funcion,
		beforeSend: funcion,
		async:true,//or false
		timeout:5000;
	})
}*/