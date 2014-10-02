<?php


$name = "archivoCSV.csv";

$arreglo = array($_POST["titulo"],
	$_POST["autor"],
	$_POST["coautor"],
	$_POST["lugar"],
	$_POST["isbn"]	
);

// deberia validar 


if (file_exists($name)){
	$archi = fopen($name, "a");
	fputcsv($archi, $arreglo);	
}

header("Location: ./LectorCSV.php");