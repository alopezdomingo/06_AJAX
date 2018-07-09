	    	<?php
			$conexion = mysqli_connect("localhost","root","","spain") or die("Error al conectar con la base de datos");
			$registros = mysqli_query($conexion,"select provincia,idprovincia from provincia order by provincia ASC") or die("Error al realizar la consulta");
	    		while ($reg=mysqli_fetch_array($registros))
			  {
			echo $reg['idprovincia']."<br>";
	    	 //echo utf8_encode($reg['provincia']);
	    				
			  }
			  mysqli_close($conexion);
				?>	
	  