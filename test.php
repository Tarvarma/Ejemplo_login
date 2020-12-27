<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<h1 style="text-align:center;">Bienvenido a mi pagina</h1>
	<br>
	<h3 style="text-align:center;">
	<?php
	echo "Bienvenido " . $_SESSION["nombre"] . " " . $_SESSION["apellido"];
	?>
	</h3>

    <a href="close.php" style="text-align:center;" ><button>Cerrar sesión</button></a>
</body>
</html>
