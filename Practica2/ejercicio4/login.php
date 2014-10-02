<?php


$user = (isset($_POST['username']))?($_POST['username']):null;
$pass = (isset($_POST['pass']))?($_POST['pass']):null;

$filename = "usuarios.dat";
session_start();


if (!isset($_SESSION['username'])){
	if (file_exists($filename)){
		$arch = fopen($filename, "r+");
		$lineas = fread($arch, filesize($filename));

		//$lineas = str_split($lineas);
		$lineas = explode("\n" , $lineas);
		if ($user == $lineas[0] && $pass == $lineas[1])
		{
			$_SESSION['username'] = $user;
			$_SESSION['color'] = $lineas[2];

			header("Location: ./mostrar.php");
		}
		else{
			$_SESSION["error"] = "Error en usuario o contraseña.";
			header("Location: ./formulario.php");
		}
	}
}else{
	/* si la session esta iniciada, solo muestra datos*/
	header("Location : ./mostrar.php");
}