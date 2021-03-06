	<!DOCTYPE html>
	<?php 
		$conexion = mysqli_connect("localhost","root","","mundial") or die("ERROR DE CONEXION "+mysqli_error());
	$registros = mysqli_query($conexion, "select distinct grupo from grupos") or die("error de consulta");
	 ?>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>08. Suma | Método AJAX</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

	<script	src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="mundial.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../style.css">

</head>
<body>
	<header><h1 class="ml-5">08. Suma (Método AJAX)</h1></header>
	<div class="container">
	  <div class="row">
	    <div class="col-md-12 mt-5">
	    	<form>
	    		 <div class="form-group">
	    		 	<input id="num1" type="number" placeholder="Introduzca un número" name="" >
	    		 </div>
	    		<div class="form-group">
	    			<input id="num2" type="number" placeholder="Introduzca otro un número" name="">
	    		</div>
	    		<div class="form-group">
	    		 	<button type="button" class="btn btn-success" id="btn">Calcular</button>
	    		</div>
	    	</form>
	    	<div id="resultado"></div>
	    </div>
	  </div>
	</div>
	<footer><p class="text-center">Ana López</p></footer>
</body>
</html>