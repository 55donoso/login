<?php

require_once("c://xampp/htdocs/login/view/head/head.php");
if(!empty($_SESSION ['usuario'])){ // si hay un usuario logeado me vas a manadar a esta sesion
    header("Location:panel_control.php");
    exit();
}


?>

<div class="fondo-login">
    <div class="icono">
        <a href="/login/index.php">
            <i class="fa-solid fa-meteor"></i>
        </a>
    </div>
    <div class="titulo">
        Create un cuenta en NebulaTech
    </div>
    <form action="store.php" method="post" class="col-3 login" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="correo" value="<?= (!empty($_GET['correo'])) ? $_GET['correo'] : "" ?>"
                class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña"
                value="<?= (!empty($_GET['contraseña'])) ? $_GET['contraseña'] : "" ?>" class="form-control"
                id="password">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Repeat the password</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password2','eyepassword2')">
                    <i id="eyepassword2" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="confirmarContraseña"
                value="<?= (!empty($_GET['confirmarContraseña'])) ? $_GET['confirmarContraseña'] : "" ?>"
                class="form-control" id="password2">
        </div>
        <?php if (!empty($_GET['error'])): ?>
            <div id="alertError" style="margin:auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : "" ?>

            </div>
        <?php endif; ?>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary">CREAR CUENTA</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Tienes una cuenta? <a href="login.php" style="text-decoration: none;">Inicia sesion</a>
    </div>
</div>

<?php

require_once("c://xampp/htdocs/login/view/head/footer.php");


?>