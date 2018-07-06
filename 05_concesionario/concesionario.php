<?php 
	header("Content-type: application/json; charset=utf-8");

	 $conexion=mysqli_connect("localhost","root","","concesionario");
	 $matricula = $_REQUEST['m'];

	 $registro=mysqli_query($conexion, "select * from coches where matricula='$matricula'") or die("ERROR DE CONSULTA");
	 $cantidad = mysqli_num_rows($registro);
	 if ($cantidad==0) {
	 	# code...
	 	echo "No existe vehículo";
	 }else{
	 	$reg=mysqli_fetch_array($registro);
	 	
	 	$matricula=$reg['matricula'];
	 	$marca=$reg['marca'];
	 	$modelo=$reg['modelo'];
	 	$precio=$reg['precio'];
	 	$km=$reg['km'];

	 	$array= array("matricula"=>$matricula,"Marca"=>$marca,"Modelo"=>$modelo, "Precio"=>$precio, "Km "=>$km);
	 	echo json_encode($array);
	 	
	 	/*echo "<h2>";
		echo utf8_encode($matricula);
		echo "</h2><br>";
		echo utf8_encode($marca);
		echo "<br>";
		echo utf8_encode($modelo);
		echo "<br>";
		echo utf8_encode($precio);
		echo "<br>";
		echo utf8_encode($km);
		echo "<br>";*/
	 }
 ?>