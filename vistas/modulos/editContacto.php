<?php
 $vista = explode('/', $_GET['ruta']);
 
$contacto = Contacto::optenerContacto($vista[1]);

?>


<div class="formulario_contacto">


    <div class="register-box wd-500">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Actualizar  contacto</p>

                <form action="#" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" autocomplete="off" placeholder="nombre" name="nombre" id="nombre" value="<?= $contacto['nombre']?>" required  />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="apellido" name="apellido" id="apellido" value="<?= $contacto['apellido']?>" required />
                        
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="telephone" class="form-control" placeholder="telefono" name="telefono" value="<?= $contacto['telefono']?>" id="telefono" />
                        
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nota" name="nota"  id="nota" value="<?= $contacto['nota']?>" />
                        
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="imagen" name="imagen" id="imagen" />                        
                    </div>
                    <div class="input-group mb-3">
                      <img src="<?=BASE_URL.$contacto['imagen']?>" > 
                    </div>
                    <div class="input-group mb-3">
                       <input type="hidden" value="<?= $contacto['imagen']?> " name="fileAnterior"> 
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Actualizar el contacto</button>
                            <a href="<?= BASE_URL?>contactos"> Listar contactos</a>
                        </div>

                    </div>
                     
                    <?php
                        $usuario = new Contacto();
                        $usuario->ActualizarContato($vista[1]);
                    ?>

                </form>
                


            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

</div >