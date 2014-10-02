<?php

include_once("view/TwigView.php");
class ReservasView extends TwigView
{
    public function index(){
        echo self::getTwig()->render('Reservas.html');
    }
}