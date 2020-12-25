<?php
	$rut = $_GET['RUT'];
	$nombre = $_GET['NOMBRE'];
	$region = $_GET['REGION'];
	$comuna = $_GET['COMUNA'];

	include 'connect.php';

	$sql = "insert into persona(rut, nombre, region, comuna)";
	$sql .= "values ('$rut', '$nombre', '$region', '$comuna')";

	$resultado = mysqli_query($bd, $sql);

	echo("<style> 
			body, html {
				background:url(../images/covid2.jpg);
			} 
			p {
				display:block; 
				margin-left:auto; 
				margin-right: auto; 
				width: 150px;
				color:white; 
				text-aling:center;
			}
			#volver a{
				text-decoration: none;
				border-style: solid;
				color: white;
			}
		</style>");
	if ($resultado){
		echo "<p>Datos ingresados correctamente</p>";
	} else {
		echo "<p>Error al ingresar datos</p>";
	}

	echo "<p id='volver'><a href='../index.html'>Volver</a></p>"
?>
