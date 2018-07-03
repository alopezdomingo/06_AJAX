<?php 
	$mat = $_REQUEST['mati'];
	$marca="";
	$km="";

	if ($mat == '111A') {
		# code...
		$marca="FERRARI";
		$modelo="360";
		$km=1000;
	}
	elseif ($mat=='222B') {
		# code...
		$marca="FORD";
		$modelo="FIESTA";
		$km=1200;
	}
	elseif ($mat=='333C'){
		$marca="AUDI";
		$modelo="A9";
		$km=800;
	}
	echo "{
		'marca':'$marca',
		'modelo':'$modelo',
		'km':'$km';
	}";

 ?>