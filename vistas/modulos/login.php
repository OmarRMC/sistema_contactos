    <div style="height: 100vh; display:grid;place-content:center ">

        <div class="login-box">
            <div class="login-logo">
                <a href="#"><b>Sistemas de </b>Contactos </a>
            </div>
            <br />
            <div class="card">
                <div class="card-body login-card-body">
                    <p class="login-box-msg">Bienvenido</p>

                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="correo" name="usuario" id="usuario" required />

                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="contraseña" name="clave" id="clave" required />

                        </div>
                        <div class="row">
                            <div class="col-12 mt-1">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Ingresar
                                </button>
                            </div>
                        </div>
                        <?php
                        $login = new Usuario();
                        $login->loginUsuario();
                        ?>

                    </form>

                    <p class="mb-1 mt-4 text-center">
                        <a href="<?= BASE_URL ?>registro"> Crear cuenta</a>
                    </p>
                </div>
            </div>
        </div>

    </div>