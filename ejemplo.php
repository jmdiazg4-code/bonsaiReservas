<?php
	/*$nombre = $_POST["nombre"];
	$metodo = $_POST["metodo"];
	echo "Hola ".$nombre." uso el metodo ".$metodo;*/

	$ejemplo = array(
		"nombre" => $_GET["nombre"]),
		"metodo" => $_GET["metodo"]
	);
	echo json_encode($ejemplo);

?>