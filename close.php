<?php

session_start();
session_unset(); // Borra la info almacenada en $_SESSION
session_destroy(); // Destruye la sesión

header("Location: index.html");
?>
