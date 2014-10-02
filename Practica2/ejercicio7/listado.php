<!DOCTYPE html>


<html>

</html>

<body>
<style>
table{
	border: 1px solid black;
	margin:auto;

}
table td {
	padding: 1%;
	overflow: hidden;
}
</style>	
<table>
<?php 
session_start();
if (isset($_SESSION["tabla"])){
	foreach($_SESSION["tabla"] as $libro)
	{
		echo "<tr>";
		echo " <td> $libro[0]</td>";
		echo " <td> $libro[1]</td>";
		echo " <td> $libro[2]</td>";
		echo " <td> $libro[3]</td>";
		echo " <td> $libro[4]</td>";
		echo "</tr>";
 	}
 }
 else
 {	
 	echo "<h3> NO HAY LIBROS QUE MOSTRAR</h3>";
 }
	
?>
</table>
<a href= "./LectorCSV.php"> LECTOR CSV </a> <br>
<a href= "./formulario.php"> formulario libro </a>

</body>