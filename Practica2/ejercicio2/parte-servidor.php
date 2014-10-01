<!DOCTYPE html>

<html>

<head>
	<title> Mostrando Datos </title>
</head>

<body>
<a href="./ejercicio2.php">ejercicio2.php</a>
<h1>HABRIA QUE VALIDAR! PERO NI IDEA COMO!!!</h1>
	<ul>
		<?
			foreach($_POST as $nombre_campo => $valor){ 
			   echo "<li> $nombre_campo = $valor </li>" ;
			   
			}
		?>
	</ul>

</body>

</html>