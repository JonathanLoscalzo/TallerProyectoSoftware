<?php
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

       
    } else {
        $_SESSION ["error"] = "Los archivos insertados no son correctos, intente nuevamente";
    }
    
header("Location: ./formulario")
