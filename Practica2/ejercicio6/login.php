<?php


$user = (isset($_POST['username']))?($_POST['username']):null;
$pass = (isset($_POST['pass']))?($_POST['pass']):null;

$filename = "usuarios.dat";
session_start();


if (!isset($_SESSION['username'])){
	if (file_exists($filename)){
		$arch = fopen($filename, "r+");
		$lineas = fread($arch, filesize($filename));

		//cada linea representa un usuario contraseña color. 
		$lineas = explode("\n" , $lineas);
		for ($index = 0; $index < count($lineas); $index++){
			$linea = explode (", ", $lineas[$index] );
			if ($user == $linea[0] && $pass == $linea[1])
			{
				$_SESSION['username'] = $user;
				$_SESSION['color'] = $linea[2];
				header("Location: ./ejercicio2.php");
			}
		}
		$_SESSION["error"] = "Error en usuario o contraseña.";
		header("Location: ./formulario.php");
	}
}else{
	$_SESSION["error"] = "Sesion ya iniciada.";
	header("Location : ./ejercicio2.php");
}