<?php

if(!isset($_SESSION)){
    session_start();
}

require_once 'config/config.php';

require_once 'controladores/Layout.php';
require_once 'controladores/Contacto.php';
require_once 'controladores/Usuario.php';
require_once 'controladores/Persona.php';

require_once 'modelos/ContactoModel.php';
require_once 'modelos/UsuarioModel.php';
require_once 'modelos/PersonaModel.php';


$layout = new Layout();
$layout->layout();

?>