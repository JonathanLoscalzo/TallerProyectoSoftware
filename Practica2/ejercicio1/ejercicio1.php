<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$name = "contador.txt";

if (file_exists($name)) {
    $mode = "r+";
    
    $arch = fopen($name, $mode);
    $linea = fread($arch, filesize($name));
    fclose($arch);
}
$mode = "w";
$arch = fopen($name, $mode);
echo "<h1> esto es lo leido".$linea."</h1>";
$contador =(int)$linea + 1;
fwrite($arch, $contador);
fclose($arch);
echo "<h2>sos el usuario numero " . $contador . "</h2>";
