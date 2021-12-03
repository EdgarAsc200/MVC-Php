<?php
    require_once "connection.php";
    class UsuarioModel{
        /****************************************************
         FUNCION LISTAR USUARIOS
        ***************************************************/
        static public function listar(){
            $query  =ConnectionBd::conectar() -> prepare("SELECT * FROM usuarios");
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_CLASS);
        }
        /****************************************************
         FUNCION LISTAR POR ID USUARIOS
        ***************************************************/
        static public function filteruser($id){
            $query = ConnectionBd::conectar()->prepare("SELECT * FROM usuarios WHERE id_usuario = :id");
            $query->bindParam(":id", $id, PDO::PARAM_STR);
            $query->execute();
            return $query -> fetchAll(PDO::FETCH_CLASS);
                }
        /****************************************************
         FUNCION AGREGAR NUEVO USUARIOS
        ***************************************************/
        static public function newuser($username,$password,$nombre_usuario,$apellido_usuario){
            $query  = ConnectionBd::conectar()->prepare("INSERT INTO usuarios(username,password,nombre_usuario,apellido_usuario)VALUES(:username,:password,:nombre_usuario,:apellido_usuario)");
            $query->bindParam(":username",$username, PDO::PARAM_STR);
            $query->bindParam(":password",$password, PDO::PARAM_STR);
            $query->bindParam(":nombre_usuariuo", $nombre_usuario, PDO::PARAM_STR); 
            $query->bindParam(":apellido_usuario", $apellido_usuario, PDO::PARAM_STR);                         

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
        static public function deleteuser($id){
            $query = ConnectionBd::conectar() -> prepare("DELETE FROM usuarios where id_usuario = :id");
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
        static public function updateuser($id,$username,$password,$fullname){
            $query =  ConnectionBd::conectar()->prepare("UPDATE usuarios SET username = :username, password = :password, fullname = :fullname WHERE id_usuario = :id");
            $query->bindParam(":id",$id,PDO::PARAM_STR);
            $query->bindParam(":username",$username,PDO::PARAM_STR);
            $query->bindParam(":password",$password,PDO::PARAM_STR);
            $query->bindParam(":fullname",$fullname,PDO::PARAM_STR);
            if($query->execute()){
                echo "Registro actulizado Correctamente";
            }
            else{
                echo "Error al actualizar el registro ";
            }
        }
        


    }


