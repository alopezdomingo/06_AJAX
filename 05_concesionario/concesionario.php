<?php 
	 $conexion=mysqli_connect("localhost","root","","concesionario");
	 $matricula = $_REQUEST['matricula'];

	 $registro=mysqli_query($conexion, "select * from coches where matricula='$matricula'") or die("ERROR DE CONSULTA");

	 $reg=mysqli_fetch_array($registro);
		echo "<h2>";
		echo utf8_encode($reg['matricula']);
		echo "</h2><br>";
		echo utf8_encode($reg['marca']);
		echo "<br>";
		echo utf8_encode($reg['modelo']);
		echo "<br>";
		echo utf8_encode($reg['precio']);
		echo "<br>";
		echo utf8_encode($reg['km']);
		echo "<br>";
 ?>