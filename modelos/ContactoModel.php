<?php

require_once 'Conexion.php';


class ContactoModel {

    static public function registrarContacto($tabla, $datos){
        $con = Conexion::conectar();
        $stmt = $con->prepare("INSERT INTO $tabla (nombre, apellido, nota , imagen , telefono ,id_usuario ) VALUES( :nombre, :apellido, :nota , :imagen  , :telefono ,:id_usuario)");
        $stmt->bindParam(':nombre', $datos['nombre'], PDO::PARAM_STR);
        $stmt->bindParam(':apellido', $datos['apellido'], PDO::PARAM_STR);
        $stmt->bindParam(':nota', $datos['nota'], PDO::PARAM_STR);
        $stmt->bindParam(':imagen', $datos['imagen'], PDO::PARAM_STR);
        $stmt->bindParam(':telefono', $datos['telefono'], PDO::PARAM_STR);

        $stmt->bindParam(':id_usuario', $datos['id_usuario'], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return $con->lastInsertId();
            
        } else {
            return false;
        }
    }

    static public function listarContactoUsuario(){
        $stmt = Conexion::conectar()->prepare("SELECT * FROM contacto WHERE id_usuario= {$_SESSION['id_usuario']} AND estado='REGISTRADO' ");
        $stmt->execute();
        return $stmt->fetchAll();
    }


    static  public function EliminarContacto($id){
        //return var_dump($id); 
        
        $stmt = Conexion::conectar()->prepare("UPDATE contacto SET estado='ELIMINADO' WHERE id_usuario= {$_SESSION['id_usuario']} AND id_contacto={$id} ");
        if($stmt->execute()){
            return true ; 
        }else {
            return false ; 
        }
        
    }

    static public function OptnerContacto($id){

        $query = Conexion::conectar()->prepare("SELECT * FROM contacto WHERE id_usuario={$_SESSION['id_usuario']} AND id_contacto={$id}"); 
        if($query->execute()){
            return $query->fetch(); 
        }else {
            return false ;
        }

    }

    static public function ActualizarContato($id,$datos){
        $query = Conexion::conectar()->prepare("UPDATE contacto SET nombre='{$datos['nombre']}', apellido='{$datos['apellido']}' , telefono='{$datos['telefono']}'  , nota='{$datos['nota']}' , imagen='{$datos['imagen']}', id_usuario={$datos['id_usuario']}   WHERE id_usuario={$datos['id_usuario']} AND id_contacto={$id}"); 
        if($query->execute()){
            return true; 
        }else {
            return false ;
        }
    }

}


?>