<?php 
	 $conexion=mysqli_connect("localhost","root","","horoscopo");
		$codigo = $_REQUEST['codigo'];


		$registro=mysqli_query($conexion, "select * from futuro where codigo='$codigo'") or die("Error de consulta");
		$reg=mysqli_fetch_array($registro);
		echo "<h2>";
		echo utf8_encode($reg['signo']);
		echo "</h2><br>";
		echo utf8_encode($reg['prediccion']);
 ?>