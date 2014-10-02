<!DOCTYPE hmtl>
<html>
	<title>EJERCICIO 4 - FORMULARIO USUARIO Y CONTRASEÑA </title>
	<meta charset="utf-8">
</html>
<style type="text/css">
	.al-medio{
		margin: auto;
		width: 30%;
	}

</style>

<body>

<?php 
	session_start();
	if (isset($_SESSION["username"])){
		header("Location: ./mostrar.php");
	}

	if (isset($_SESSION["error"])){
		echo "<h4> ".$_SESSION["error"]." </h4>" ;
		unset($_SESSION["error"]);
	}
	
?>
	<h1> COMPLETE EL FORMULARIO (usuario, usuario)</h1>
	<form class = "al-medio" action = "./login.php" method= "POST">
		<input type ="text" placeholder = "Ingrese USUARIO" name ="username" required>
		<input type ="password" placeholder = "Ingrese password" name ="pass" required>
		<button type="submit" name="submit" > SUBMITEAME </button>
	</form>
</body>
