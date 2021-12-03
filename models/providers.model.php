<?php

require_once "connection.php";
 class ProviderModel{
     /****************************************************
         FUNCION LISTAR USUARIOS
        ***************************************************/
        static public function listar(){
            $query  =ConnectionBd::conectar() -> prepare("SELECT * FROM proveedores");
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_CLASS);
        }
        /****************************************************
         FUNCION LISTAR POR ID USUARIOS
        ***************************************************/
        static public function filterprovider($id){
            $query = ConnectionBd::conectar()->prepare("SELECT * FROM provedores WHERE id_provedor = :id");
            $query->bindParam(":id", $id, PDO::PARAM_STR);
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_CLASS);
                }
        /****************************************************
         FUNCION AGREGAR NUEVO USUARIOS
        ***************************************************/
        static public function newprovider($dni,$nombre,$telefono,$correo,$sitio){
            $query  = ConnectionBd::conectar()->prepare("INSERT INTO proveedores(dni_proveedor,nomnre_proveedor,telefono,coreo_proveedor,sitio_web)VALUES(:dni,:nombre,:telefono,:correo,:sitio)");
            $query->bindParam(":dni",$dni, PDO::PARAM_STR);
            $query->bindParam(":nombre",$nombre, PDO::PARAM_STR);                             
            $query->bindParam(":telefono",$telefono, PDO::PARAM_STR);  
            $query->bindParam(":correo",$correo, PDO::PARAM_STR);                             
            $query->bindParam(":sitio",$sitio, PDO::PARAM_STR);                             
.          
            if($query->execute()){
                echo "registro exitoso ";
            }
            else{
            echo "Error la hacer la insercion de un nuevo registro";
            }   
        }
        /****************************************************
         FUNCION ELIMINAR NUEVO USUARIOS
        ***************************************************/
        static public function deleterpovideer($id){
            $query = ConnectionBd::conectar() -> prepare("DELETE FROM proveedores where id_proveedor = :id");
            $query->bindParam(":id", $id, PDO::PARAM_STR);

            if($query->execute()){
                echo "Dato eliminado";
            }
            else{
                echo "Eror al eliminar los datos";
            }
        }
        /****************************************************
         FUNCION AGREACTUALIZAR USUARIOS
        ***************************************************/
        static public function updateprovider($id,$dni,$nombre,$telefono,$correo,$sitio){
            $query =  ConnectionBd::conectar()->prepare("UPDATE proeedores SET dni_proveedor =:dni,nombre_provedor = :nombre_proceedor, telefono = :telefono, correo_proveedor = :correo ,sitio_web = :sitio WHERE id_proveedor = :id");
            $query->bindParam(":id",$id, PDO::PARAM_STR);
            $query->bindParam(":dni",$dni, PDO::PARAM_STR);
            $query->bindParam(":nombre",$nombre, PDO::PARAM_STR);                             
            $query->bindParam(":telefono",$telefono, PDO::PARAM_STR);  
            $query->bindParam(":correo",$correo, PDO::PARAM_STR);                             
            $query->bindParam(":sitio",$sitio, PDO::PARAM_STR);   
            if($query->execute()){
                echo "Registro actulizado Correctamente";
            }
            else{
                echo "Error al actualizar el registro ";
            }
        }
        


 }
