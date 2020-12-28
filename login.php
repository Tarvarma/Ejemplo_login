<?php
	include 'connect.php';
	session_start();
	$user = $_GET['user'];
	$password = $_GET['password'];

	/*
	 * Valida que el usuario y contraseña sean iguales a los
	 * valores que se encuentras en la BD.
	 * */
	$resultado = mysqli_query($bd, "Select name, surname from  users where user = '$user' and password = MD5('$password')");
	

if ($resultado){
    	// Si la consulta devuelve más de una fila entonces los datos estan en la BD.
    	if (mysqli_num_rows($resultado) > 0){
			$datos = mysqli_fetch_object($resultado); // Guardo los datos en $_SESSION
			$_SESSION["nombre"] = $datos->name;
			$_SESSION["apellido"] = $datos->surname;
			header("Location: test.php");
    	} else {
			header('Location: error.html'); // Los datos no están en la BD.
    	}
	} else {
		echo 'Ha ocurrido un error en la BD.'; // Error en la consulta
		exit();
	}

?>
