<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once("../view/Reservas.php");
include_once("../model/ReservaModel.php");
include_once("../repository/ReservaRepository.php");

if (filter_var_array($_POST, array(
            'nombre' => array(
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => array('regexp' => "/[a-zA-Z]+/")),
            'apellido' => array(
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => array('regexp' => "/[a-zA-Z]+/")),
            'email' => FILTER_VALIDATE_EMAIL,
            'telefono' => FILTER_VALIDATE_INT,
            'nacimiento' => array(
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => array('regexp' => "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/")),
            'fechaReserva' => array(
                'filter' => FILTER_VALIDATE_REGEXP,
                'options' => array('regexp' => "/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/")),
            'docType' => array('filter' => FILTER_VALIDATE_REGEXP,
                'options' => array('regexp' => '/DNI|Pasaporte/')),
            'docNumber' => FILTER_VALIDATE_INT
        ))) {

    /* si paso los filtros, deberia poder agregar a la base de datos, envio el $_POST 
      acà el problema que el post DEBERIA tener array con el mismo nombre que la base
     *      */


    $rr = new ReservaRepository();
    $reserva = new ReservaModel();
    $reserva->set($_POST);
    $rr->add($reserva);
    $_SESSION["message"] = "Reserva realizada";
} else {
    $_SESSION ["message"] = "Los archivos insertados no son correctos, intente nuevamente";
}
$view = new ReservaView();
$view->index();


