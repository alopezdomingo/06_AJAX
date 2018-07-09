<?php 
	header("Content-type: application/json; charset=utf-8");

	 $conexion=mysqli_connect("localhost","root","","spain");

	 mysqli_set_charset($conexion,"utf8");
	 $idprovincia=$_REQUEST['idp'];
	// $poblacion = $_REQUEST['p'];

	 $registro=mysqli_query($conexion, "select poblacion from poblacion where idprovincia='$idprovincia'") or die("ERROR DE CONSULTA");

	 $cantidad = mysqli_num_rows($registro);
	 
	 $poblaciones = array();
	while ($reg=mysqli_fetch_assoc($registro))
	{ 		
	 	$poblaciones[]=$reg;
	}

	 	echo json_encode($poblaciones);
	 

 ?>