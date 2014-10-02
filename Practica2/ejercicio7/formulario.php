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

	<h1> COMPLETE EL FORMULARIO (usuario, usuario) para hacer sus reservas </h1>
	<form class = "al-medio" action = "./EscritorCSV.php" method= "POST">
		<input type ="text" placeholder = "Ingrese USUARIO" name ="titulo" required>
		<input type ="text" placeholder = "Ingrese autor" name ="autor" required>
		<input type ="text" placeholder = "Ingrese coator" name ="coautor" required>
		<input type ="text" placeholder = "Ingrese lugar y fecha edicion" name ="lugar" required>
		<input type ="number" placeholder = "Ingrese	isbn" name ="isbn" required>
		<button type="submit" name="submit" > SUBMITEAME </button>
	</form>
</body>
