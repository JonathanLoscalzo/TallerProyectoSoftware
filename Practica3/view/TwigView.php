<?php


include_once("../vendor/autoload.php");

//include_once("controller/LoginController.php");

abstract class TwigView {

    private static $twig;

    public static function getTwig() {

        if (!isset(self::$twig)) {

            Twig_Autoloader::register();
            $loader = new Twig_Loader_Filesystem('../templates/');
            self::$twig = new Twig_Environment($loader);
            
            //LoginController::getInstance()->startSession();
            session_start();
            self::$twig->addGlobal('session', $_SESSION); 

            $cant = count(split("/", $_SERVER['REQUEST_URI'])) - 2;
            $var = str_repeat("../", $cant);
            self::$twig->addGlobal('server', $var); // cantidad de redirecciones que tiene que hacer

            if (isset($_SESSION["message"])) {
                self::$twig->addGlobal('message', $_SESSION["message"]); 
                unset($_SESSION["message"]);
            }
        }
        return self::$twig;
    }

}
