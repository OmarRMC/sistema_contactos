<?php

class Usuario {

    static public function guardarUsuario(){
        if (isset($_POST['nombre']) && isset($_POST['paterno']) && isset($_POST['correo']) && isset($_POST['clave'])) {

            if($_POST['clave']==$_POST['repita_clave']){

            if (
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['nombre']) &&
                preg_match('/^[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+$/', $_POST['paterno']) &&
                preg_match('/^(|[a-zA-ZñÑáéíóúÁÉÍÓÚ ]+)$/', $_POST['materno']) &&
                (filter_var($_POST['correo'], FILTER_VALIDATE_EMAIL) !== NULL)
            ) {

                $tabla = 'persona';
                $directorio = 'vistas/uploads/usuarios/';
                $archivo = $directorio . time() . "." . pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
                if(move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo)){
                    $datos = [
                        'nombre' => trim($_POST['nombre']),
                        'paterno' => trim($_POST['paterno']),
                        'materno' => trim($_POST['materno']), 
                        'imagen'=>$archivo
                    ];
                }
               
                $id_persona = UsuarioModel::registrarPersona($tabla, $datos);
                if($id_persona){

                    $tabla = 'usuario';
                    $datos = [
                        'id_usuario' => $id_persona,
                        'usuario'    => trim($_POST['correo']),
                        'clave'      => password_hash($_POST['clave'], PASSWORD_DEFAULT),
                        'rol'        => 'usuario'
                    ];

                    $respuesta = UsuarioModel::registrarUsuario($tabla, $datos);
                    
                    if($respuesta){
                        $usuario = UsuarioModel::mostrarUsuario($id_persona);
                        $_SESSION['id_usuario'] = $usuario['id_usuario'];
                        $_SESSION['nombre'] = $usuario['nombre'];
                        $_SESSION['paterno'] = $usuario['paterno'];
                        $_SESSION['materno'] = $usuario['materno'];
                        $_SESSION['correo'] = $usuario['usuario'];
                        $_SESSION['rol'] = $usuario['rol'];
                        $_SESSION['imagen'] = $usuario['imagen'];
                    
                        echo "<script>
                            window.location.href = '" .BASE_URL. "contactos';
                        </script>";

                    }

                } 
            }else {
                echo "<script>
                    alert('Los campos  no debe contener caracteres especiales y debe ser un correo válido.');
                </script>";
            }
        }else {
           
                echo "<script>
                    alert('Las contraseñas no coinciden, Verificar ');
                </script>";
           
        }
        }
         //var_dump($_POST); 

    }

    
    public function loginUsuario()
    {
        if(isset($_POST['usuario']) && isset($_POST['clave'])){
            $usuario = UsuarioModel::mostrarUsuarioLogin($_POST['usuario']);
            if($usuario){

                if(password_verify($_POST['clave'],  $usuario['clave'])){
                    $_SESSION['id_usuario'] = $usuario['id_usuario'];
                    $_SESSION['nombre'] = $usuario['nombre'];
                    $_SESSION['paterno'] = $usuario['paterno'];
                    $_SESSION['materno'] = $usuario['materno'];
                    $_SESSION['correo'] = $usuario['usuario'];
                    $_SESSION['rol'] = $usuario['rol'];
                    $_SESSION['imagen'] = $usuario['imagen'];

                    echo "<script>
                        window.location.href = '" .BASE_URL. "contactos';
                    </script>";
                }else{
                    echo '<br><div class="alert alert-danger">Error al ingresar al sistema.</div>';
                }
            }else{
                echo '<br><div class="alert alert-danger">Error al ingresar al sistema.</div>';
            }
        }
    }



}


?>