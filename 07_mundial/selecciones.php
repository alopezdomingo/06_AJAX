<?php
	header("Content-type:application/json; charset=utf-8");
	
	$conexion = mysqli_connect("localhost","root","","mundial") or die("error al realizar la conexion");
	
	mysqli_set_charset($conexion,"utf8");
	
	$grupo = $_REQUEST['grupo'];
	
	$registros = mysqli_query ($conexion,"select seleccion from grupos where grupo='$grupo'") or die ("error al realizar la consulta");
	
	$equipos = array();
	
	while ($reg = mysqli_fetch_assoc($registros))
	{
		$equipos[] = $reg;
	}
	echo json_encode($equipos);
	mysqli_close($conexion);
?>