<?php

require_once 'Conexion.php';

class PersonaModel
{

    static public function mostrarUsuario()
    {
        $stmt = Conexion::conectar()->prepare("SELECT p.*, u.usuario FROM persona p JOIN usuario u ON p.id_persona=u.id_usuario");
        $stmt->execute();
        return $stmt->fetchAll();
    }


}