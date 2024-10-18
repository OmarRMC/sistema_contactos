<?php

$vista = explode('/', $_GET['ruta']);

if(isset($vista[1])){
    $verificar =Contacto::EliminarContacto($vista[1]);         
    //var_dump($verificar); 
    /*
    $old = getcwd(); 
    chdir("../../");
    $urlImagen = $_POST['urlImage'] ;
    echo getcwd();     
    if(is_file($urlImagen)){
        echo unlink($urlImagen);
    } 
    echo $_POST['urlImage']; 
    chdir($old); */
}

$ListaContactos = Contacto::listarContactos();

function Editar($id){
    echo   $id ; 
}

?>
<h4 style="text-align: center;">Lista de contactos</h4>
<div class="row row-cols-1 row-cols-md-3 g-4 contenedor_card">
    <?php foreach ($ListaContactos as $key => $contacto) : ?>
        <div class="col card_contacto" data="<?= $contacto['id_contacto']?>" >
            <div class="card h-100 w-100">
                <img src="<?=BASE_URL.$contacto['imagen']?> " class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"><?= $contacto['nombre']." ".$contacto['apellido']?></h5>
                    <p class="card-text"><?= $contacto['nota']?></p>
                    <p class="card-text">Telf: <?= $contacto['telefono']?></p>
                </div>                
            <div style="display: flex; justify-content: center; gap: 12px; margin-bottom: 12px;">
                <form action="<?=BASE_URL?>contactos/<?=$contacto['id_contacto']?>" method="post">
                    <input type="hidden" value="<?=$contacto['imagen']?>" name="urlImage" />
                    <button  type="submit" class="btn btn-danger">Eliminar</button>
                </form>  
                <div>
                <a href="<?=BASE_URL."editContacto/".$contacto['id_contacto']?>"  class="btn btn-success">Editar</a>
                </div>     
            </div>
            </div>
        </div>  

    <?php endforeach; ?>
    
</div>
<div class="contenedor_card">
        <form action="<?=BASE_URL?>home" method="post">
            <button type="submit" class="btn btn-primary">Agregar Contacto </button>
        </form>
        &nbsp; 
        <form action="<?= BASE_URL ?>controladores/reportes/ContatosPdf.php" target="_blank" method="post">
            <button type="submit" class="btn btn-danger">Generar PDF </button>
        </form>
        
</div> 