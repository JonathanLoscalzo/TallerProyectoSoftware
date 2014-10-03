<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservaModel
 *
 * @author jloscalzo
 */
include_once("Model.php");

class ReservaModel extends Model {

    protected $nombre;
    protected $apellido;
    protected $email;
    protected $telefono;
    protected $nacimiento;
    protected $docType;
    protected $docNumber;
    protected $fechaReserva;
    protected $cantidad;
    protected $observaciones;

    public function __contruct($arr) {
        /* llega a andar esto ... */
//        print_r("hola");die;
//        foreach ($arr as $key=>$value){
//            $this->$key = $arr[$key];
//        }
//        $this->nombre = $arr["nombre"];
//        $this->apellido = $arr["apellido"];
//        $this->email = $arr["email"];
//        $this->telefono = $arr["telefono"];
//        $this->nacimiento = $arr["nacimiento"];
//        $this->docType = $arr["docType"];
//        $this->docNumber = $arr["docNumber"];
//        $this->fechaReserva = $arr["fechaReserva"];
//        $this->cantidad = $arr["cantidad"];
//        $this->observaciones = $arr["observaciones"];
//        
    }

    public function set($arr) {
        print_r("hola");
        foreach ($arr as $key => $value) {
            $this->$key = $arr[$key];
        }
    }

}
