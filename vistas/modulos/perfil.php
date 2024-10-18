<?php
if (isset($_SESSION['id_usuario'])) {
    //var_dump($_SESSION); 
}
function salir()
{
    echo "window.location.href = '" . BASE_URL . "salir';";
}
?>
<div class="perfil">
    <div class="card mb-3" style="max-width: 450px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src=<?= $_SESSION['imagen'] ?> class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">Nombre: <?= $_SESSION['nombre'] ?></h5>
                    <p class="card-text"><?= $_SESSION['paterno'] ?> - <?= ($_SESSION['materno']) ? $_SESSION['materno'] : '' ?></p>
                    <p class="card-text"><small class="text-body-secondary">Usuario: <?= $_SESSION['correo'] ?></small></p>
                </div>
                <div class="SalirPerfil"> 
                <button type="button" onclick="<?php salir() ?>" class="btn btn-danger">Salir</button>
                </div>
            </div>
        </div>
    </div>

</div>