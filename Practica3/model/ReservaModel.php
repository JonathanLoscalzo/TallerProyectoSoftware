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
class ReservaModel {
    private $nombre;
    private $apellido;
    private $email;
    private $telefono;
    private $nacimiento;
    private $docType;
    private $docNumber;
    private $fechaReserva;
    private $cantidad;
    private $observaciones;

    public function __contruct($arr) {
        /* llega a andar esto ... */
        foreach ($arr as $key=>$value){
            $this->$key = $arr[$key];
        }
//        $this->nombre = $arr["nombre"];
//        $this->apellido =$arr[];
//        $this->email = $arr[];
//        $this->telefono =$arr[];
//        $this->nacimiento =$arr[];
//        $this->docType = $arr[];
//        $this->docNumber = $arr[];
//        $this->fechaReserva = $arr[];
//        $this->cantidad= $arr[];
//        $this->observaciones = $arr[];
//        
    }

}
