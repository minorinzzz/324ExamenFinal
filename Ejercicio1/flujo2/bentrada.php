<?php
  include "conexion.inc.php";
  if(!isset($_SESSION)){ // si no ha iniciado sesion 
      session_start(); 
  } 
  $usuario = $_SESSION["usuario"];


  $sql = "SELECT max(nro_tramite) as 'maxi' FROM flujotramite";
  $resultado=mysqli_query($con, $sql);
  while($fila = mysqli_fetch_array($resultado)){
    $maximonumero = intval($fila["maxi"])+1;
  }

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

      .custom-table {
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #dee2e6;
      }

      .custom-table th,
      .custom-table td {
        padding: 0.75rem;
        text-align: left;
        border-bottom: 1px solid #dee2e6;
      }

      .custom-table tbody tr:nth-child(even) {
        background-color: #d8e9f1;
      }

      .custom-table tbody tr:nth-child(odd) {
        background-color: #e2f3e7;
      }

      .custom-table th:nth-child(2n),
      .custom-table td:nth-child(2n) {
        background-color: #c5e2f9;
      }

      .custom-table th:nth-child(2n+1),
      .custom-table td:nth-child(2n+1) {
        background-color: #a2d9f5;
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
              <h4 class="fw-bold py-3 mb-4" align="center">TAREAS PENDIENTES DE: <?php echo "<br/><br/>".$usuario; ?></h4>
              <div class="card">
                <h5 class="card-header"></h5>
                <div class="table-responsive text-nowrap">
                  <table class="custom-table">
                    <thead>
                      <tr>
                        <th>Flujo</th>
                        <th>Proceso</th>
                        <th>Nro. Tramite</th>
                        <th>Fecha de inicio</th>
                        <th>Fecha final</th>
                        <?php if ($_SESSION['rol'] == 'Kardex') { ?>
                        <th>USUARIO</th>
                        <?php } ?>
                        <th>Estado</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $row_color = 'even';
                      while ($fila = mysqli_fetch_array($resultado)) {
                        $row_color = $row_color === 'even' ? 'odd' : 'even';
                        echo "<tr class='$row_color'>";
                        echo "<td>".$fila["Flujo"]."</td>";
                        echo "<td>".$fila["proceso"]."</td>";
                        echo "<td>".$fila["nro_tramite"]."</td>";
                        echo "<td>".$fila["fechaini"]."</td>";
                        if (isset($fila["fechafin"])) {
                          echo "<td>Terminado</td>";
                        } else {
                          echo "<td>No Terminado</td>";
                        }
                        if ($_SESSION['rol'] == 'Kardex') {
                          echo "<td>".$fila["usuario_tarea"]."</td>";
                        }
                        echo "<td><a href='flujo.php?flujo=".$fila["Flujo"]."&proceso=".$fila["proceso"]."&nro_tramite=".$fila['nro_tramite']."&usuario=".$usuario."'>Editar</td>";
                        echo "</tr>";
                      }
                      ?>
                    </tbody>
                  </table>

                  <form action="index.php">
                    <button class="btn btn-secondary d-grid w-20" type="submit" value="Volver" name="Volver">Cerrar Sesión</button>
                  </form>
                  <?php
                    $descipcion ="";
                    $sql = "SELECT DISTINCT r.descipcion from usuario u, rol r, rolusuario ru where u.id = ru.IdUsuario and ru.IdRol = r.id and u.descripcion like '$usuario'";
                    $resultado=mysqli_query($con, $sql);
                    while($fila = mysqli_fetch_array($resultado)){
                      $descipcion = $fila["descipcion"];
                    }
                    if($descipcion == "Alumno"){
                      $sql = "SELECT DISTINCT f.flujo, fd.descipcion from flujo f, flujodescripcion fd WHERE f.flujo = fd.flujo";
                      $resultado=mysqli_query($con, $sql);
                      while($fila = mysqli_fetch_array($resultado)){
                        $nro_flujo = $fila["flujo"];
                        $description = $fila["descipcion"];
                        echo "<form action='insertar.php' method='post'>";
                        echo "<input type='hidden' name='flujo' value='$nro_flujo'>";
                        echo "<input type='hidden' name='proceso' value='P1'>";
                        echo "<input type='hidden' name='usuario' value='$usuario'>";
                        echo "<input type='hidden' name='maximonumero' value='$maximonumero'>";
                        echo "<button class='btn btn-primary' type='submit'>$description</button>";
                        echo "</form>";
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="content-footer footer bg-footer-theme"></footer>
  </body>
</html>
