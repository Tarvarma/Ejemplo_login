<?php
	include 'connect.php';

	$user = $_GET['user'];
	$password = $_GET['password'];
	
	$resultado = mysqli_query($bd, "Select name, surname from  users where user = '$user' and password = MD5('$password')");

	$datos = mysqli_fetch_object($resultado);
if ($resultado){
    	if (mysqli_num_rows($resultado) > 0){
			header("Location: test.php? name=$datos->name&surname=$datos->surname");
    	} else {
			header('Location: error.html');
    	}
	} else {
		echo 'Ha ocurrido un error';
		exit();
	}

?>
