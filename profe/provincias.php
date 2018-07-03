<?php
$cod = $_REQUEST['codigo'];

switch ($cod)
{
	case 1: echo "Albacete: 392.118";
	break;
	case 2: echo "Ciudad Real: 506.888";
	break;
	case 3: echo "Cuenca: 201.071";
	break;
	case 4: echo "Guadalajara: 252.882";
	break;
	case 5: echo "Toledo: 688.672";
	break;
	default: echo "debe elegir una provincia de la España profunda";
	break;
}
?>