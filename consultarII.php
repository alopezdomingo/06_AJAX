<?php 
	header('Content-Type: application/json; charset=utf-8');
	$modelo = 'A360';
	$marca = 'Ferrari';
	$km=1000;

	$array= array("marca"=>$marca, "modelo"=>$modelo, "km"=>$km);
/*Array asociativo; */
	echo json_encode($array);
 ?>