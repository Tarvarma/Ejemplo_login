<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Bienvenido a mi pagina con php</h1>
	<br>
	<h2><?php
		$name = $_GET['name'];
		$surname = $_GET['surname'];
	
	echo "Bienvenido $name $surname " ?></h2>
</body>
</html>
