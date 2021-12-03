<?php
//requerimos el archivo rutas  en el index
require_once "controller/route.controller.php";


//instanciamos la clase y mandamos a llamar al metodo
$index = new Route();
$index->index();