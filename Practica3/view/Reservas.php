<?php

include_once("TwigView.php");
class ReservaView extends TwigView
{   
    public function index(){
        echo self::getTwig()->render('Reservas.html.twig');
    }
}