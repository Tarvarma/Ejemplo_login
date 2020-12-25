<?php
	$servidor = "localhost";
	$usuario = "root";
	$contrasenna = "";
	$base_datos = "login_test";
	$bd = mysqli_connect($servidor, $usuario, $contrasenna, $base_datos);
	if (!$bd) {
		echo "Conexion Fallida";
		exit();
	}
?>
