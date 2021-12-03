<?php

 //Veridficacion de la ruta    
    $routesArray = explode("/", $_SERVER['REQUEST_URI']);
    $routesArray = array_filter($routesArray);
       
    //Verificamos la rutas

    if(count($routesArray) == 0){
        echo "no hay pagina disponible";
    }
    else{
        if(count($routesArray) == 2 && !empty($routesArray[2]) && isset($_SERVER['REQUEST_METHOD']) ){
           $route = explode("?",$routesArray[2]);
           if(!file_exists("controller/$route[0].controller.php")){
               header('location:/mvc/');
           }
           else{
               require_once "controller/$route[0].controller.php";

           }
        }
        else{
           if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] = "GET"){
            require_once "views/index.php";
           }
        }
    
    }
    

    