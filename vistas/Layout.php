<?php

//if(!isset($_SESSION)){
//    session_start();
//}

$clase = '';
if (isset($_GET['ruta'])) {
    $vista = explode('/', $_GET['ruta']);
    $vista = $vista[0];
} else {
    $vista = 'login';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= BASE_URL ?>vistas/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="<?= BASE_URL ?>vistas/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= BASE_URL ?>vistas/css/main.css">
    <title>Adm Contactos</title>
</head>

<body>
    <?php
    if (!isset($_SESSION['id_usuario'])) {

        if ($vista != "registro" && $vista != "login") {
            echo "<script>
                        window.location.href = '" . BASE_URL . "login';
                    </script>";
        }
    } else {
        if ($vista == "login" || $vista == "registro") {
            echo "<script>
                        window.location.href = '" . BASE_URL . "contactos';
                    </script>";
        }
    }

    if ($vista != "login" && $vista != "registro") {
        include_once('modulos/header.php');
    }
    ?>
    <div style="min-height: 85vh ; ">
        <?php
        if (($vista === 'perfil' && isset($_SESSION['id_usuario'])) ||
            ($vista === 'contactos') && isset($_SESSION['id_usuario']) ||
            ($vista === 'home') && isset($_SESSION['id_usuario']) ||
            ($vista === 'editContacto') && isset($_SESSION['id_usuario']) ||
            $vista === 'registro' ||
            $vista === 'login' ||
            $vista === 'salir' ||
            ($vista === 'usuarios' && isset($_SESSION['id_usuario']) && $_SESSION['rol'] == 'admin')
        ) {
            include_once('modulos/' . $vista . '.php');
        } else {
            include_once('modulos/404.php');
        }
        ?>
    </div>
    <?php
    if ($vista != "login" && $vista != "registro") {
        include_once('modulos/footer.php');
    }
    ?>

</html>