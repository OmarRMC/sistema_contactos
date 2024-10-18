
<div class="formulario_contacto">


    <div class="register-box wd-500">
        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrar un contacto</p>

                <form action="#" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" autocomplete="off" placeholder="nombre" name="nombre" id="nombre" required />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="apellido" name="apellido" id="apellido" required />
                        
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="telephone" class="form-control" placeholder="telefono" name="telefono" id="telefono" />
                        
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="nota" name="nota" id="nota" />
                        
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="imagen" name="imagen" id="imagen" required />                        
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Guadar contacto</button>
                            <a href="<?= BASE_URL?>contactos"> Listar contactos</a>
                        </div>

                    </div>
                     
                    <?php
                        $usuario = new Contacto();
                        $usuario->guardarContato();
                    ?>

                </form>
                


            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

</div >