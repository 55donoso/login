<?php
require_once("c://xampp/htdocs/login/view/head/head.php");


?>
<div class="fondo_menu">

  <div class="container-fuid">


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Inicio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php if (empty($_SESSION['usuario'])): ?>


          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="proveedoresDropdown" role="button" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  PROVEEDORES
                </a>
                <div class="dropdown-menu" aria-labelledby="proveedoresDropdown">
                  <?php
                  // Agregar 5 empresas ficticias
                  $empresas = array(
                    array('nombre' => 'Empresa 1', 'direccion' => 'Dirección 1', 'telefono' => '123456789'),
                    array('nombre' => 'Empresa 2', 'direccion' => 'Dirección 2', 'telefono' => '123456789'),
                    array('nombre' => 'Empresa 3', 'direccion' => 'Dirección 3', 'telefono' => '123456789'),
                    array('nombre' => 'Empresa 4', 'direccion' => 'Dirección 4', 'telefono' => '123456789'),
                    array('nombre' => 'Empresa 5', 'direccion' => 'Dirección 5', 'telefono' => '123456789'),
                  );
                  foreach ($empresas as $empresa) {
                    echo '<a class="dropdown-item" href="#">' . $empresa['nombre'] . ' - ' . $empresa['direccion'] . ' - ' . $empresa['telefono'] . '</a>';
                  }
                  ?>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PRODUCTOS</a>
              </li>
            </ul>
            <a href="/login/view/home/login.php" class="boton">Inicia Sesion</a>
            <a href="/login/view/home/signup.php" class="boton">Registrate</a>
          </div>



        <?php else: ?>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="/login/view/home/logout.php" class="boton">Cerrar Sesion</a>
          </div>

        </div>
      </nav>
    </div>
  </div>
  <div class="fondo">
    <div class="container mt-3 p-3">
      <div id="contenido" class="row">
        <div class="col-md-6 agregar-cita">
          <form id="nueva-cita">
            <legend class="mb-4">Datos del Usuario</legend>
            <div class="form-group row">
              <label class="col-sm-4 col-lg-4 col-form-label">Nombre:</label>
              <div class="col-sm-8 col-lg-8">
                <input type="text" id="equipo" name="equipo" class="form-control" placeholder="Nombre">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-lg-4 col-form-label">Propietario:</label>
              <div class="col-sm-8 col-lg-8">
                <input type="text" id="propietario" name="propietario" class="form-control" placeholder="Propietario">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-lg-4 col-form-label">Teléfono:</label>
              <div class="col-sm-8 col-lg-8">
                <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="Número de Teléfono">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-4 col-lg-4 col-form-label">Fecha:</label>
              <div class="col-sm-8 col-lg-8">
                <input type="date" id="fecha" name="fecha" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-lg-4 col-form-label">Hora:</label>
              <div class="col-sm-8 col-lg-8">
                <input type="time" id="hora" name="hora" class="form-control">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-4 col-md-4 col-lg-4 col-form-label">Destino:</label>
              <div class="col-sm-8 col-md-8 col-lg-8">
                <textarea id="destino" name="destino" class="form-control"></textarea>
              </div>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success w-100 d-block form-control">Crear Cita</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <h2 id="administra" class="mb-2">Administra tus Citas</h2>
          <ul id="citas" class="list-group lista-citas"></ul>
        </div>
      </div> <!--.row-->
    </div><!--.container-->


  <?php endif ?>