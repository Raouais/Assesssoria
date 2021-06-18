<?php
namespace App;

class App {

    public static function load(){
        require '../app/Autoloader.php';
        require '../HTML/Autoloader.php';
        Autoloader::register();
        \HTML\Autoloader::register();
    }
}