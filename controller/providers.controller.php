<?php       
require_once "models/providers.model.php";

if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(isset($_GET['delete'])){
        $result = ProvidersModel::delefteprovider($_GET['delete']);
        header('location:/mvc/providers');
    }
    if(isset($_GET['id'])){
        $result = ProvidersModel::filterpfrovider($_GET['id']);
        require_once "views/updaterpoviders.php";
    }
    else{
        $result = ProvidersModel::listar();
    }
}
if($_SERVER['REQUEST_METHOD'] == "POST"){
    if(isset($_POST['method']) && $_POST['method'] == "update"){

        $result = ProvidersModel::updatepovider($_POST['id'],$_POST['dni'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],$_POST['sitio_web']);
    }
    else{
        $result = ProvidersModel::newprovider(($_POST['dni'],$_POST['nombre'],$_POST['direccion'],$_POST['telefono'],$_POST['correo'],$_POST['sitio_web'])
    }
}

require_once "views/providers.php";
