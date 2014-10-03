<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReservaRepository
 *
 * @author jloscalzo
 */
include_once("PDOrepository.php");

class ReservaRepository extends PDORepository {

    //put your code here
    public function add($reserva) {
        $sql = "INSERT INTO reserva (nombre, apellido, email, telefono, nacimiento, docType, docNumber, fechaReserva, cantidad, observaciones) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $args = $reserva->getArray();

        $mapper = function($response) {
            return $response;
        };

        return $this->queryList($sql, $args, $mapper);
    }

    public function edit($obj) {
        
    }

    public function exist($id) {
        
    }

    public function getAll() {
        
        $sql = "select * from reserva";
        $args = [];
        $mapper = function($row){
            return new ReservaModel($row);
        };
        return $this->queryList($sql, $args, $mapper);
    }

    public function getByID($id) {
        
    }

    public function remove($id) {
        
    }

}
