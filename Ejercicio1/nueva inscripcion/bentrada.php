<?php
  include "conexion.inc.php";
  if(!isset($_SESSION)){ // si no ha iniciado sesion 
      session_start(); 
  } 
  $usuario = $_SESSION["usuario"];
  $sql="select * from flujotramite ";
  $sql.="where usuario='".$usuario."' and fechafin is null ";
  $resultado=mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html>
  <head>

    <title>Procesos Pendientes</title>
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <style>
      /* Agrega estilos personalizados aquí */
      body {
        background-color: #f8f9fa;
        font-family: Arial, sans-serif;
      }

      .layout-wrapper {
        background-color: #fff;
      }

      .layout-page {
        padding: 1rem;
      }

      .container-p-y {
        padding-top: 1rem;
        padding-bottom: 1rem;
      }

      .fw-bold {
        font-weight: bold;
      }

      .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
      }

      .mb-4 {
        margin-bottom: 1.5rem;
      }

      .card {
        border: none;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        border-radius: 0.5rem;
        overflow: hidden;
      }

      .card-header {
        background-color: #fff;
        border-bottom: none;
      }

      .table-responsive {
        overflow-x: auto;
      }

      .table {
        width: 100%;
        margin-bottom: 0;
        color: #6c757d;
        border-collapse: collapse;
      }

      .table th,
      .table td {
        padding: 0.75rem;
        vertical-align: middle;
        border: 1px solid #dee2e6;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #dee2e6;
      }

      .table-hover tbody tr:hover {
        background-color: #f8f9fa;
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

      .content-footer {
        background-color: #f8f9fa;
        padding: 0.75rem 0;
      }
    </style>

  </head>

  <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4" align='center'>TAREAS PENDIENTES DE: <?php echo "<br/><br/>".$usuario; ?>  </h4>
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table table-bordered table-hover">
                    <thead>
                      <tr class="negrita1">
                        <th>Flujo</th>
                        <th>Proceso</th>
                        <th>Nro. Tramite</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha final</th>
                        <?php 
                          if($_SESSION['rol'] == 'Kardex'){
                        ?>
                            <!-- echo "<td>".$fila["usuario_tarea"]."</td>"; -->
                            <th> USUARIO </th>
                        <?php 
                          }
                        ?>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php 
                        while ($fila = mysqli_fetch_array($resultado))
                        {
                          echo "<tr>";
                          echo "<th>".$fila["Flujo"]."</th>";
                          echo "<th>".$fila["proceso"]."</th>";
                          echo "<th>".$fila["nro_tramite"]."</th>";
                          echo "<th>".$fila["fechaini"]."</th>";
                          if(isset($fila["fechafin"])){
                            echo "<th> Terminado </th>";
                          }else{
                            echo "<th> No Terminado </th>";
                          }
                          if($_SESSION['rol'] == 'Kardex'){
                            echo "<th>".$fila["usuario_tarea"]."</th>";
                          }
                          echo "<th><a href='flujo.php?flujo=".$fila["Flujo"]."&proceso=".$fila["proceso"]."&nro_tramite=".$fila['nro_tramite']."&usuario=".$usuario."'> Editar </td>";
                          echo "</tr>";
                        }
                      ?>
                    </tbody>
                
                  </table>
                  <form action="index.php">
                    <button class="btn btn-secondary d-grid w-20" type="submit" value="Volver" name = "Volver">Cerrar Sesión</button>
                  </form>
                </div>
              </div>
              
            </div>
            
          </div>
        </div>
      </div>
    </div>    
    <footer class="content-footer footer bg-footer-theme">

    </footer>
  </body>
</html>
