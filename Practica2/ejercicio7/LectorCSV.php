<?php


$name = "archivoCSV.csv";

if (file_exists($name)){
	$archi = fopen($name, "r+");
	$arreglo = [];
	$index = 0; 
	while (($datos = fgetcsv($archi, 0, ",")) != FALSE){
		$arreglo[$index] = $datos;
		$index +=1;
	}
	($archi);
}
session_start();
$_SESSION["tabla"] = $arreglo;
header("Location: ./listado.php");