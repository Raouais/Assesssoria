<?php

namespace App;

class Autoloader {

    //spl_autoload_register 1er param: function à appeler pour autoloader
    //ici je veux que le parametre appeler une fonction dans une classe
    //ici notre function autoload est situé dans la class Autoload
    //alors je lui passe un table avec le nom de la classe et le nom de la finction 

    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }


    //strpos chercher la position de la string donnée au 2e paramètre par rapport à la string donnée en 1er paramètre
    //str_replace remplace le 1er paramètre par le 2e dans la string donné au 3e paramètre
    
    static function autoload($class){ 
        if(strpos($class, __NAMESPACE__.'\\') === 0){
            $class = str_replace(__NAMESPACE__ . '\\', '' , $class);
            require __DIR__. '\\'.$class.'.php';
        }
    }
}

/**
 * 
 * Dans la fonction autoload 
 * Si on souhaite qu'elle fonctionne sur Linux il lui faudrait ajouter une ligne et modifier la dernière comme ci-dessous
 * $class = str_replace('\\', '/', $class); 
 * require __DIR__. '/'.$class.'.php';      
 */
