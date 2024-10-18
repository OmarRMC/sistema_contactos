<?php

class Contacto{

    static public function guardarContato(){
        if (isset($_POST['nombre']) && isset($_POST['apellido'])  && isset($_POST['telefono'])) {

            if (
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nombre']) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['apellido']) &&
                preg_match('/^[0-9]{7,10}$/', $_POST['telefono'])
            ) {

                $tabla = 'contacto';
                $directorio = 'vistas/uploads/contactos/';
                $archivo = $directorio . time() . "." . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo)){
                    $datos = [
                        'nombre' => trim($_POST['nombre']),
                        'apellido' => trim($_POST['apellido']),
                        'nota' => trim($_POST['nota']), 
                        'telefono' => trim($_POST['telefono']), 
                        'imagen'=>$archivo, 
                        'id_usuario'=>$_SESSION['id_usuario']
                    ];
                }
               
                $id_contacto = ContactoModel::registrarContacto($tabla, $datos);
                            
            } else {
                echo "<script>
                    alert('Verificar los campos , no deven contener caracteres especiales');
                </script>";
            }

        }
         //var_dump($_POST); 

    }

    static public function listarContactos()
    {
        return ContactoModel::listarContactoUsuario();
    }


    static public function EliminarContacto($id){
        return ContactoModel::EliminarContacto($id);
    }

    static public function optenerContacto($id){
        return ContactoModel::OptnerContacto($id);
    }

    static public function ActualizarContato($id){
        if (isset($_POST['nombre']) && isset($_POST['apellido'])  && isset($_POST['telefono'])) {

            if (
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nombre']) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['apellido']) &&
                preg_match('/^[0-9]{7,10}$/', $_POST['telefono'])
            ) {
                $tabla = 'contacto';
                if(isset($_FILES['imagen'])){
                    $directorio = 'vistas/uploads/contactos/';
                    $archivo = $directorio . time() . "." . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                    if(!move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo)){
                        $archivo=$_POST['fileAnterior'];
                    }
                }else {
                    $archivo=$_POST['fileAnterior'];
                }
                
                
                    $datos = [
                        'nombre' => trim($_POST['nombre']),
                        'apellido' => trim($_POST['apellido']),
                        'nota' => trim($_POST['nota']), 
                        'telefono' => trim($_POST['telefono']), 
                        'imagen'=>$archivo, 
                        'id_usuario'=>$_SESSION['id_usuario']
                    ];
                
               
                $id_contacto = ContactoModel::ActualizarContato($id, $datos);
                echo "<script>
                window.location.href = '" .BASE_URL. "contactos'; 
                </script>
                "      ; 
            } else {
                echo "<script>
                    alert('Verificar los campos ,  no debe contener caracteres especiales y  el correo debe ser  válido.');
                </script>";
            }

        }
        
    }

}

?>