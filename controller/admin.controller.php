<?php
//requerimos el archivo modelo
    require_once "models/usuario.model.php";
    //instanciamps la case y requerimos la vista
    if($_SERVER['REQUEST_METHOD'] == "GET"){
        if(isset($_GET['delete'])){
            $result = UsuarioModel::deleteuser($_GET['delete']);
            header('location:/mvc/admin');
        }
        if(isset($_GET['id'])){
            $result = UsuarioModel::filteruser($_GET['id']);
            require_once "views/updateadmin.php";
        }
        else{
            $result = UsuarioModel::listar();
            require_once "views/admin.php"  ;
        }
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      

        if(isset($_POST['method']) && $_POST['method'] == "update"){
            $query = UsuarioModel::updateuser($_POST['id'],$_POST['usuario'], $_POST['password'], $_POST['nombre_usuario'],$_POST['apellido_usuario']);
            header('location:/mvc/admin');
        }
        else{
            $result = UsuarioModel::newuser(_POST['id'],$_POST['usuario'], $_POST['password'], $_POST['nombre_usuario'],$_POST['apellido_usuario']);
            header('location:/mvc/admin');
        
        }

    }
    
    
  


