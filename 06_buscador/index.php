<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Buscador de provincias</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script	src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="buscadorMuni.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
	<header><h1 class="ml-5">06. Buscador de provincias</h1></header>
	<div class="container">
	  <div class="row">
	    <div class="col-md-12 mt-4">
	    	<?php
			$conexion = mysqli_connect("localhost","root","","spain") or die("Error al conectar con la base de datos");
			$registros = mysqli_query($conexion,"select provincia,idprovincia from provincia order by provincia ASC") or die("Error al realizar la consulta");
		?>
	    	<form action="buscadorMuni.php"> 
	    			<select id="provin" name="verProvincias">
	    			 <?php while ($reg=mysqli_fetch_array($registros))
			  {
				  ?>
	    				<option class="ieja" value="<?php echo $reg['idprovincia']; ?>">
	    					<?php echo utf8_encode($reg['provincia']);?>
	    				</option>
	    			<?php
			  }
			  mysqli_close($conexion);
				?>	
	    			</select>
	    		    		
	    		<div id="consulta">
	    			<select id="datos">
	    				<option>Seleccione población</option>
					</select>
				</div>
	    	</form>
	    </div>
	  </div>
	</div>
	<footer><p class="text-center">Ana López</p></footer>
</body>
</html>