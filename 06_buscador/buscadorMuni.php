<?php 
	header("Content-type: application/json; charset=utf-8");

	 $conexion=mysqli_connect("localhost","root","","spain");
	 $idprovincia=$_REQUEST['idp'];
	 $poblacion = $_REQUEST['p'];

	 $registro=mysqli_query($conexion, "select poblacion from poblacion where idprovincia='$idprovincia'") or die("ERROR DE CONSULTA");

	 $cantidad = mysqli_num_rows($registro);
	 
	 if ($cantidad==0) {
	 	# code...
	 	echo "No existe vehículo";
	 }else{
	 	$reg=mysqli_fetch_array($registro);
	 	
	 	$poblacion=$reg['poblacion'];
	 	$idprovincia=$reg['idprovincia'];

	 	$array=array("poblacion"=>$poblacion, "idprovincia"=>$idprovincia);

	 	echo json_encode($array);
	 }

 ?>