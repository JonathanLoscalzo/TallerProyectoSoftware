<?php
session_start();
if (isset($_SESSION['username'])){
	session_destroy();
	session_start();
	$_SESSION["error"] = "Sesion finalizada.";
}
else
{
	$_SESSION["error"] = "No se puede finalizar session si no la inició";	
}

header("Location: ./formulario.php");