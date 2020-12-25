<?php
	include 'connect.php';

	$user = $_GET['user'];
	$password = $_GET['password'];
	
	$resultado = mysqli_query($bd, "Select name, surname from  users where user = '$user' and password = MD5('$password')");

if ($resultado){
    	if (mysqli_num_rows($resultado) > 0){
			header('Location: test.html');
    	} else {
			header('Location: error.html');
    	}
	} else {
		echo 'Ha ocurrido un error';
		exit();
	}
	$datos = mysqli_fetch_object($resultado);
	echo "$datos->name  <br> $datos->surname";
?>
