<?php


/*
	arreglo de ejercicio1 por sesiones. 
	Solo contar visitas por sesiones

*/


$name = "contador.txt";

if (file_exists($name))
{
	$arch = fopen($name, "r");
	$linea = fread($arch, filesize($name));
	fclose($arch);

}

session_start();

if ( isset($_SESSION['contador'])){
	echo "<h2> UD ES EL USUARIO = ". $_SESSION['contador'] ."</h2>";
}
else{
	$_SESSION['contador']=(int)$linea + 1;
	$arch = fopen($name, 'w');
	fwrite($arch, $_SESSION['contador']);
	fclose($arch);
	echo "<h2>BIenvenido usuario  = ". $_SESSION['contador'] . "</h2>";

}