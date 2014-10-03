<!DOCTYPE html>
<html>
</html>


<?php
include_once("Reservas.php");
 if (isset($_POST["ejercicio"])){
    switch($_POST["ejercicio"]){
    case 1:
        $view = new ReservaView();
        $view->index();
        break;
    default :
        header("Location: ./index.php");
        break;
    }
    
}

?>

 <body>
     <form action="./index.php" method="POST">
     EJERCICIO: 
     <select name="ejercicio">
         <option value="1">1</option>
     </select>
     <button type="submit" > submit </button>
     <form>
     
 </body>

 