
<!DOCTYPE html>
<html>
	<title> PANTALLA BIENVENIDA </title>
</html>

<body>
<?php 
	session_start(); 
	var_dump($_SESSION);
?>
<h1> BIENVENIDO : <?php echo $_SESSION["username"]; ?> </h1>
<p><?php echo $_SESSION["color"]; ?></p>

<a href="./logout.php"> CERRAR SESSION </a>

</body>