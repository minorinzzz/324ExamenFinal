<div class="card">
  <h3 class="card-header">DATOS DEL ESTUDIANTE</h3>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Carnet de identidad</th>
          <th>Nombre completo</th>
          <th>cod. departamento</th>
          <th>fecha nacimiento</th>
          <th>nacionalidad</th>
        </tr>
      </thead>
      <tbody class="table-border-bottom-1">
        <?php 
        echo "<tr>";
        echo "<td>".$filafi['ci']."</td>";
        echo "<td>".$filafi['nombrecompleto']."</td>";
        echo "<td>".$filafi['coddepto']."</td>";
        echo "<td>".$filafi['fechanacimiento']."</td>";
        echo "<td>".$filafi['nacionalidad']."</td>";
        echo "</tr>";
        $id_certificacion = $filafi['id'];
        ?>
      </tbody>
    </table>
    <br/>
    <h3 class="card-header">MATERIAS APROBADAS DEL ESTUDIANTE</h3>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>MATERIA</th>
            <th>NOTA</th>
            <th>PERIODO</th>
            <th>GESTION</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-1">
          <?php 
          while ($fila=mysqli_fetch_array($resultadomaterias))
          {
            echo "<tr>";
            echo "<td>".$fila['materia']."</td>";
            echo "<td>".$fila['nota']."</td>";
            echo "<td>".$fila['periodo']."</td>";
            echo "<td>".$fila['gestion']."</td>";
            echo "</tr>";
          }
          ?>
        </tbody>
      </table>
      <h3 class="card-header"><br/><br/>DOCUMENTOS DEL ESTUDIANTE</h3>
    </div>

    <?php 
    $sql="SELECT * FROM academico2p.certificado_conclusion ";
    $sql.="WHERE id='$id_certificacion'";
    $resultadocerti=mysqli_query($con, $sql);
    $filacerti = mysqli_fetch_array($resultadocerti);
    ?>

    <div class="card">
      <div class="col-md-12 mb-4" align='center'>
        <div class="card">
          <h5 class="card-header">Carta al decano de la Facultad (FCPN)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/carta_decano/".$filacerti['cartadecano']."' height='450' width='50%'>";
            ?>
          </div>

          <h5 class="card-header">Fotografía de la Cédula de Identidad (PDF)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/cedula_identidad/".$filacerti['cedulaidentidad']."' height='450' width='50%'>";
            ?>
          </div>

          <h5 class="card-header">Certificado de calificaciones (Kardex Facultativo) (PDF)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/certificado_calficaciones/".$filacerti['certificadocalficaciones']."' height='450' width='50%'>";
            ?>
          </div>

          <h5 class="card-header">Solicitud de emisión de certificado de conclusión de estudios (PDF)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/solicitud_conclusion_estudios/".$filacerti['solicitudconclusionestudios']."' height='450' width='50%'>";
            ?>
          </div>

          <h5 class="card-header">Carátula del Trabajo de Grado (PDF)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/caratula_trabajo_grado/".$filacerti['caratulatrabajogrado']."' height='450' width='50%'>";
            ?>
          </div>

          <h5 class="card-header">Resolución de aprobación de perfil de grado (PDF)</h5>
          <div class="card-body">
            <?php 
            echo "<embed align='center' type='application/pdf' src='certificacion/resolucion_perfil_grado/".$filacerti['resolucionperfilgrado']."' height='450' width='50%'>";
            ?>
          </div>
        </div>
      </div>
    </div>

    <p class="card-header" align='center'>
      Si los datos están llenados correctamente, responda <strong>SI</strong>, caso contrario <strong>NO</strong>
    </p>
  </div>
</div>
