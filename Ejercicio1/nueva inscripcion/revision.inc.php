<?php
$titulobachiller1;
$certinaci;
$certidentidad;
?>
<div class="card">
                <h4 class="card-header">DATOS DEL ESTUDIANTE</h4>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Cedula de Identidad</th>
                        <th>Nombre completo</th>
                        <th>cod. departamento</th>
                        <th>fecha nacimiento</th>
                        <th>nacionalidad</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-1">
                    <?php 
                        while ($fila=mysqli_fetch_array($resultadofi))
                        {
                            echo "<tr>";
                            echo "<td>".$fila['ci']."</td>";
                            echo "<td>".$fila['nombrecompleto']."</td>";
                            echo "<td>".$fila['coddepto']."</td>";
                            echo "<td>".$fila['fechanacimiento']."</td>";
                            $titulobachiller1 = $fila['codBachiller'];
                            $certinaci = $fila['cnacimiento'];
                            $certidentidad = $fila['cidentidad'];
                            // echo "<td> <img src='archivos/certificado_bachiller/".$fila['codBachiller']."' alt='Bachiller' width='200' height='200'> </td>";
                            // echo "<td> <img src='archivos/certificado_nacimiento/".$fila['cnacimiento']."' alt='Nacimiento' width='200' height='200'> </td>";
                            // echo "<td> <img src='archivos/certificado_identidad/".$fila['cidentidad']."' alt='Identidad' width='200' height='200'> </td>";
                            echo "<td>".$fila['nacionalidad']."</td>";
                            echo "</tr>";
                        }
                    ?>
                      
                    </tbody>
                  </table>
                  <h4 class="card-header"> <br/><br/> DOCUMENTOS DEL ESTUDIANTE</h4>
                  
                  

                </div>
                <div class="row mb-0">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <h5 class="card-title">TITULO DE BACHILLER</h5>
                      <?php 
                        echo " <img src='archivos/certificado_bachiller/".$titulobachiller1."' alt='Bachiller' width='400' height='400'/> ";
                         
                      ?>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row mb-0">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      
                    <h5 class="card-title">CERTIFICADO DE NACIMIENTO</h5>
                    <?php 
                    echo "<td> <img src='archivos/certificado_nacimiento/".$certinaci."' alt='Nacimiento' width='400' height='400'> </td>";
                            
                    ?>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="row mb-0">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      
                    <h5 class="card-title">CARNET DE IDENTIDAD</h5>
                    <?php 
                        echo "<td> <img src='archivos/certificado_identidad/".$certidentidad."' alt='Identidad' width='400' height='400'> </td>";
                            
                    ?>
                    </div>
                  </div>
                </div>
              </div>
                <p class="card-header" align='center'>
                Si los datos estan llenados correctamente, responda <strong>SI</strong>, caso contrario <strong>NO</strong>

                </p>
              </div>
      
    <!-- <h1>segudno revision.inc.php</h1> -->  