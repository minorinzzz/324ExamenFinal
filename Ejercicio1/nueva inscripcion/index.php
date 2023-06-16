<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
    
    <style>
      /* Agrega estilos personalizados aquí */
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }
      
      .container-xxl {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
      }
      
      .authentication-wrapper {
        max-width: 400px;
        width: 100%;
      }
      
      .card {
        border: none;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        border-radius: 0.5rem;
        overflow: hidden;
      }
      
      .card-body {
        padding: 2rem;
      }
      
      .mb-2 {
        margin-bottom: 1rem;
      }
      
      .mb-3 {
        margin-bottom: 1.5rem;
      }
      
      .form-label {
        font-weight: bold;
      }
      
      .form-control {
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        padding: 0.5rem;
        width: 100%;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
      }
      
      .form-control:focus {
        border-color: #80bdff;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
      }
      
      .form-password-toggle {
        position: relative;
      }
      
      .input-group-merge {
        display: flex;
      }
      
      .input-group-merge input[type="password"] {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
      }
      
      .input-group-text {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0;
        border-left: none;
        cursor: pointer;
      }
      
      .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
      }
      
      .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
      }
      
      .btn-primary:focus,
      .btn-primary.focus {
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
      }
      
      .btn-primary:active,
      .btn-primary.active {
        background-color: #0062cc;
        border-color: #005cbf;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
      }
    </style>
  </head>

  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="card">
          <div class="card-body">
            <h4 class="mb-2" align="center">Bienvenido</h4>
            <form class="mb-3" action="indexcontrol.php" method="GET">
              <div class="mb-3">
                <label class="form-label">Usuario</label>
                <input type="text" class="form-control" placeholder="Ingrese su usuario" name='usuario' autofocus />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" for="password">Contraseña</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" class="form-control" name="contrasenia" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i> </span>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-primary d-grid w-100" type="submit" value="Aceptar" name="Aceptar">Ingresar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
