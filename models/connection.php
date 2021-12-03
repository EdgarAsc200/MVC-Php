<?php
class ConnectionBd{

static public function conectar(){

    try{

        $conn = new PDO("mysql:host=localhost;dbname=almacen","root", "12345678");
        $conn->exec("set names utf8");

    }catch(PDOException $e){

        die("Error al conectar con la base de datos: ".$e->getMessage());

    }

    return $conn;
    
}

}