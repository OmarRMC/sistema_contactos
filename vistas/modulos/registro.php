<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Consultas | Posgrado</title>
    <!-- CSS -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback" />
    <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css" />
    <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css" />
    <!-- SCRIPTS    -->
    <script src="vistas/plugins/jquery/jquery.min.js"></script>
    <!-- Boostrap v 4.6 -->
    <script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- adminlte 3.0.1 -->
    <script src="vistas/dist/js/adminlte.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>



<body style="height: 100vh  ;  display:grid;place-content:center ">


    <div class="register-box wd-500">
        <div class="register-logo">
            <a href="#"><b>Consultas</b>Posgrado</a>
        </div>

        <div class="card">
            <div class="card-body register-card-body">
                <p class="login-box-msg">Registrar una cuenta</p>

                <form action="#" method="post" enctype="multipart/form-data" >
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" autocomplete="off" placeholder="nombre" name="nombre" id="nombre" required />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="paterno" name="paterno" id="paterno" required />
                        
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="materno" name="materno" id="materno" />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="correo" name="correo" id="correo" required />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="contraseña" name="clave" id="clave" required />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="repita contraseña" name="repita_clave" id="repita_clave" required />
                        
                    </div>
                    <div class="input-group mb-3">
                        <input type="file" class="form-control" placeholder="imagen" name="imagen" id="imagen" required />                        
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block">Registro</button>
                        </div>
                    </div>

                    <?php
                        $usuario = new Usuario();
                        $usuario->guardarUsuario();
                    ?>

                </form>

                <div class="text-center mt-3">
                    <a href="<?= BASE_URL?>login" class="text-center">Ya tengo una cuenta</a>
                </div>
            </div>
            <!-- /.form-box -->
        </div><!-- /.card -->
    </div>

</body>

</html>