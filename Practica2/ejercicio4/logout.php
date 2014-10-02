<?php
session_start();
if (isset($_SESSION['username'])){
	session_destroy();
	session_start();
	$_SESSION["error"] = "Sesion finalizada.";
}

header("Location: ./formulario.php");