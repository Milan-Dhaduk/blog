<?php


    spl_autoload_register(function($className){

        include_once "classes/$className.php";
    });



    $rout = new Rout(); //create object from class Rout 
?>