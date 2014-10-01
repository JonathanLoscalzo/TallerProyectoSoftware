<!DOCTYPE html>

<html>

    <head>
        <title> Mostrando Datos </title>
    </head>

    <body>
        <a href="./ejercicio2.php">ejercicio2.php</a>
        <ul>
            <?php
            
            /*
             *  filter_var_array($data, $args)
             *  $data => diccionario
             *  $args => diccionario, con las opciones. 
             */
            if (filter_var_array($_POST, array(
                        'name' => array(
                            'filter' => FILTER_VALIDATE_REGEXP,
                            'options' => array('regexp' => "/[a-zA-Z]+/")),
                        'lastname' => array(
                            'filter' => FILTER_VALIDATE_REGEXP,
                            'options' => array('regexp' => "/[a-zA-Z]+/")),
                        'email' => FILTER_VALIDATE_EMAIL,
                        'phone' => FILTER_VALIDATE_INT,
                        'date' => array(
                            'filter' => FILTER_VALIDATE_REGEXP,
                            'options' => array('regexp' => "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/")),
                        'docType' => array('filter' => FILTER_VALIDATE_REGEXP,
                            'options' => array('regexp' => '/DNI|Pasaporte/')),
                        'docNumber' => FILTER_VALIDATE_INT
                    ))) {

                foreach ($_POST as $nombre_campo => $valor) {
                    echo "<li> $nombre_campo = $valor </li>";
                }
            } else {
                echo '<h2> Envio parametros que no corresponden, intente de nuevo</h2>';
            }
            ?>
        </ul>

    </body>

</html>