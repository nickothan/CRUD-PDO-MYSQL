<?php
require_once "models/conexion.php";
    class Datos extends Conexion{
        #Registro de usuarios
        #------------------------------------------
        public function registroUsuarioModel($datosModel, $tabla){
        
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (usuario, password, email) 
                                                                              VALUES (:usuario,:password,:email)");
        $stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt -> bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
        if($stmt->execute()){
            return "succes";
        }else{
            return "error";
        }
        
        }
    }
?>