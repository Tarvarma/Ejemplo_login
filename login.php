<?php
	include 'connect.php';
	session_start();
	$user = $_GET['user'];
	$password = $_GET['password'];
	
	$resultado = mysqli_query($bd, "Select name, surname from  users where user = '$user' and password = MD5('$password')");

	$datos = mysqli_fetch_object($resultado);

	$_SESSION["nombre"] = $datos->name;
	$_SESSION["apellido"] = $datos->surname;

if ($resultado){
    	if (mysqli_num_rows($resultado) > 0){
			header("Location: test.php");
    	} else {
			header('Location: error.html');
    	}
	} else {
		echo 'Ha ocurrido un error';
		exit();
	}

?>
